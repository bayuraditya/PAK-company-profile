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
            'budget' => 'nullable|numeric',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            // 'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
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
            'budget' => 'nullable|numeric',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

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
