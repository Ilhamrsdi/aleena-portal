<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;

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
        return view('admin.team.edit', compact('id'));  
    }
}