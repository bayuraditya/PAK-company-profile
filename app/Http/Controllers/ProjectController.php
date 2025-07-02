<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.project.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:255',
            'year' => 'nullable|integer',
            'budget' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            // 'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024000', // max 1GB per file

        ]);

        $project = new Project();
        $project->fill($request->only([
            'name', 'category', 'client', 'year', 'budget', 'location', 'description'
        ]));
        $project->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $originalName = $file->getClientOriginalName();
                $filename = pathinfo($originalName, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $newFileName = $filename . '-' . uniqid() . '.' . $extension;

                $destination = public_path('images/project');
                if (!file_exists($destination)) {
                    mkdir($destination, 0755, true);
                }
                $file->move($destination, $newFileName);

                $image = new ProjectImage();
                $image->name = $originalName;
                $image->path = 'images/project/' . $newFileName;
                $image->project_id = $project->id;
                $image->save();
            }
        }

        return redirect()->route('admin.project.index')->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return view('admin.project.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

  
 public function update(Request $request, Project $project)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'category' => 'nullable|string|max:255',
        'client' => 'nullable|string|max:255',
        'year' => 'nullable|integer',
        'budget' => 'nullable|string',
        'location' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        // 'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024000', // max 1GB per file
        'delete_images' => 'nullable|array',
        'delete_images.*' => 'integer|exists:project_images,id'
    ]);

    $project->fill($request->only([
        'name', 'category', 'client', 'year', 'budget', 'location', 'description'
    ]));

    // Jika pakai Spatie Sluggable dan field slug ada
    if ($project->isDirty('name')) {
        $project->slug = null; // Trigger Spatie auto generate slug again
    }

    $project->save();

    // Hapus gambar yang dicentang untuk dihapus
    if ($request->has('delete_images')) {
        foreach ($request->delete_images as $imageId) {
            $image = ProjectImage::find($imageId);
            if ($image && $image->project_id == $project->id) {
                $imagePath = public_path($image->path);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $image->delete();
            }
        }
    }

    // Tambahkan gambar baru jika ada
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
            $originalName = $file->getClientOriginalName();
            $filename = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $newFileName = $filename . '-' . uniqid() . '.' . $extension;

            $destination = public_path('images/project');
            if (!file_exists($destination)) {
                mkdir($destination, 0755, true);
            }

            $file->move($destination, $newFileName);

            ProjectImage::create([
                'name' => $originalName,
                'path' => 'images/project/' . $newFileName,
                'project_id' => $project->id,
            ]);
        }
    }

    return redirect()->route('admin.project.index')->with('success', 'Project updated successfully.');
}


    public function destroy(Project $project)
    {
        foreach ($project->projectImages as $image) {
            $fullPath = public_path($image->path);
            if (file_exists($fullPath)) {
                unlink($fullPath);
            }
            $image->delete();
        }

        $project->delete();

        return redirect()->route('admin.project.index')->with('success', 'Project deleted successfully.');
    }
}
