<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::latest()->get();
        return view('admin.team.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'position'  => 'required|string|max:255',
            'whatsapp'  => 'nullable|string|max:20',
            'email'     => 'nullable|email|max:255',
            'instagram' => 'nullable|string|max:255',
            'linkedin'  => 'nullable|url|max:255',
            'image'     => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'position', 'whatsapp', 'email', 'instagram', 'linkedin']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $timestamp = now()->format('YmdHis');
            $filename = $timestamp . '_' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/team'), $filename);

            $data['image'] = $filename;
            $data['image_path'] = 'images/team/' . $filename;
        }

        Team::create($data);

        return redirect()->route('admin.team.index')->with('success', 'Team member created successfully.');
    }

    public function edit($name)
    {
        $team = Team::where('name', $name)->firstOrFail();
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, $name)
    {
        $team = Team::where('name', $name)->firstOrFail();

        $request->validate([
            'name'      => 'required|string|max:255',
            'position'  => 'required|string|max:255',
            'whatsapp'  => 'nullable|string|max:20',
            'email'     => 'nullable|email|max:255',
            'instagram' => 'nullable|string|max:255',
            'linkedin'  => 'nullable|url|max:255',
            'image'     => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'position', 'whatsapp', 'email', 'instagram', 'linkedin']);

        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($team->image && file_exists(public_path($team->image))) {
                unlink(public_path($team->image));
            }

            $image = $request->file('image');
            $timestamp = now()->format('YmdHis');
            $filename = $timestamp . '_' . Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/team'), $filename);

            $data['image'] =  $filename;
            $data['image_path'] = 'images/team/' . $filename;
        }

        $team->update($data);

        return redirect()->route('admin.team.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy($name)
    {
        $team = Team::where('name', $name)->firstOrFail();

        if ($team->image && file_exists(public_path($team->image))) {
            unlink(public_path($team->image));
        }

        $team->delete();

        return redirect()->route('admin.team.index')->with('success', 'Team member deleted successfully.');
    }
}
