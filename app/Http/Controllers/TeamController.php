<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    function index()
    {
        $teams = Teams::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.team.index', compact('teams'));
    }
    function create()
    {
        return view('admin.team.create');
    }
    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048',
            'info' => 'nullable|string',
        ]);

        $gambarPath = null;
        if ($request->hasFile('photo')) {
            // Pastikan sudah menjalankan: php artisan storage:link
            $gambarPath = $request->file('photo')->store('team_photos', 'public');
        }   
        Teams::create([
            'name' => $request->name,
            'position' => $request->position,
            'photo' => $gambarPath,
            'info' => $request->info,
        ]);
        return redirect()->route('admin.team.index')->with('success', 'Team member added successfully.');
        // Validate and store the team member
    }
    function edit($id)
{
    $team = Teams::findOrFail($id);
    return view('admin.team.edit', compact('team'));
}

    public function destroy(Teams $team)
    {
        $team->delete();
        return redirect()->route('admin.team.index')->with('success', 'Team member deleted successfully.');
    }
    public function update(Request $request, $id)
    {
        $team = Teams::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048',
            'info' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($team->photo) {
                Storage::disk('public')->delete($team->photo);
            }
            // Simpan foto baru
            $gambarPath = $request->file('photo')->store('team_photos', 'public');
            $team->photo = $gambarPath;
        }

        $team->name = $request->name;
        $team->position = $request->position;
        $team->info = $request->info;
        $team->save();

        return redirect()->route('admin.team.index')->with('success', 'Team member updated successfully.');
    }
}