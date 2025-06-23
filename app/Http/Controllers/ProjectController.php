<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Tampilkan semua project
    public function index()
    {
        $projects = Project::latest()->get();
        return view('project.index', compact('projects'));
    }

    // Tampilkan form untuk membuat project baru
    public function create()
    {
        return view('project.create');
    }

    // Simpan project baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Project::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.project.index')->with('success', 'Project created successfully.');
    }

    // Tampilkan detail project
    public function show(Project $project)
    {
        return view('project.show', compact('project'));
    }

    // Tampilkan form edit
    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    // Proses update data
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $project->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.project.index')->with('success', 'Project updated successfully.');
    }

    // Hapus data project
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.project.index')->with('success', 'Project deleted successfully.');
    }
}
