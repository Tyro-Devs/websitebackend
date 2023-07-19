<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::all();
        return view('back.about_us.index', compact('aboutUs'));
    }

    public function create()
    {
        return view('back.about_us.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'part1' => 'nullable|string',
            'list1' => 'nullable|string',
            'list2' => 'nullable|string',
            'list3' => 'nullable|string',
            'Part2' => 'nullable|string',
        ]);

        AboutUs::create($validatedData);

        return redirect()->route('about-us.index')
            ->with('success', 'About Us section created successfully.');
    }

    public function show($id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        return view('back.about_us.show', compact('aboutUs'));
    }

    public function edit($id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        return view('back.about_us.edit', compact('aboutUs'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'part1' => 'nullable|string',
            'list1' => 'nullable|string',
            'list2' => 'nullable|string',
            'list3' => 'nullable|string',
            'Part2' => 'nullable|string',
        ]);

        $aboutUs = AboutUs::findOrFail($id);
        $aboutUs->update($validatedData);

        return redirect()->route('about-us.index')
            ->with('success', 'About Us section updated successfully.');
    }

    public function destroy($id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        $aboutUs->delete();

        return redirect()->route('about_us.index')
            ->with('success', 'About Us section deleted successfully.');
    }
}
