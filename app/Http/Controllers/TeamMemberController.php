<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::all();
        return view('team_members.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('team_members.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'designation' => 'nullable|string',
            'member_desc' => 'nullable|string',
            'twitter_link' => 'nullable|url',
            'fb_link' => 'nullable|url',
            'insta_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
            'skype_link' => 'nullable|url',
            'github_link' => 'nullable|url',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $validatedData['image'] = $imagePath;
        }

        TeamMember::create($validatedData);

        return redirect()->route('team_members.index')
            ->with('success', 'Team member created successfully.');
    }

    public function show($id)
    {
        $teamMember = TeamMember::findOrFail($id);
        return view('team_members.show', compact('teamMember'));
    }

    public function edit($id)
    {
        $teamMember = TeamMember::findOrFail($id);
        return view('team_members.edit', compact('teamMember'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'designation' => 'nullable|string',
            'member_desc' => 'nullable|string',
            'twitter_link' => 'nullable|url',
            'fb_link' => 'nullable|url',
            'insta_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
            'skype_link' => 'nullable|url',
            'github_link' => 'nullable|url',
            'is_active' => 'nullable|boolean',
        ]);

        $teamMember = TeamMember::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $validatedData['image'] = $imagePath;
        }

        $teamMember->update($validatedData);

        return redirect()->route('team_members.index')
            ->with('success', 'Team member updated successfully.');
    }

    public function destroy($id)
    {
        $teamMember = TeamMember::findOrFail($id);
        $teamMember->delete();

        return redirect()->route('team_members.index')
            ->with('success', 'Team member deleted successfully.');
    }
}
