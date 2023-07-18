<?php

namespace App\Http\Controllers;

use App\Models\TopSection;
use Illuminate\Http\Request;

class TopSectionController extends Controller
{    public function index()
    {
        $topSections = TopSection::all();
        return view('back.top.top', compact('topSections'));
    }

    public function create()
    {
        return view('back.top.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'top_heading' => 'required|string|max:255',
            'top_about' => 'nullable|string',
            'top_link' => 'nullable|string|max:255',
            'top_video_link' => 'nullable|string|max:255',
            'team_desc' => 'nullable|string',
        ]);

        TopSection::create($validatedData);

        return redirect()->route('top-sections.index')
            ->with('success', 'Top section created successfully.');
    }

    public function show($id)
    {
        $topSection = TopSection::findOrFail($id);
        return view('back', compact('topSection'));
    }

    public function edit($id)
    {
        $topSection = TopSection::findOrFail($id);
        return view('back.top.topedit', compact('topSection'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'top_heading' => 'required|string|max:255',
            'top_about' => 'nullable|string',
            'top_link' => 'nullable|string|max:255',
            'top_video_link' => 'nullable|string|max:255',
            'team_desc' => 'nullable|string',
        ]);

        $topSection = TopSection::findOrFail($id);
        $topSection->update($validatedData);


        return redirect()->route('top-sections.top.index')
            ->with('success', 'Top section updated successfully.');
    }

    public function destroy($id)
    {
        $topSection = TopSection::findOrFail($id);
        $topSection->delete();

        return redirect()->route('top-sections.top.index')
            ->with('success', 'Top section deleted successfully.');
    }
}
