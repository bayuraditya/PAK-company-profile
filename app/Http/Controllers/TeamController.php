<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // Tampilkan semua tim
    public function index()
    {
        $teams = Team::latest()->get();
        return view('team.index', compact('teams'));
    }

    // Tampilkan form buat tim baru
    public function create()
    {
        return view('team.create');
    }

    // Simpan data tim baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'position']);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('team_photos', 'public');
        }

        Team::create($data);

        return redirect()->route('admin.team.index')->with('success', 'Team member created successfully.');
    }

    // Tampilkan detail tim
    public function show(Team $team)
    {
        return view('team.show', compact('team'));
    }

    // Tampilkan form edit tim
    public function edit(Team $team)
    {
        return view('team.edit', compact('team'));
    }

    // Update data tim
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'position']);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('team_photos', 'public');
        }

        $team->update($data);

        return redirect()->route('admin.team.index')->with('success', 'Team member updated successfully.');
    }

    // Hapus data tim
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('admin.team.index')->with('success', 'Team member deleted successfully.');
    }
}
