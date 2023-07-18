<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::all();
        return view('footers.index', compact('footers'));
    }

    public function create()
    {
        return view('footers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'about' => 'nullable|string',
            'fb_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'insta_link' => 'nullable|url',
            'github_link' => 'nullable|url',
            'skype_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
            'thread_link' => 'nullable|url',
            'codecanyon_link' => 'nullable|url',
            'ghurifiri_link' => 'nullable|url',
        ]);

        Footer::create($validatedData);

        return redirect()->route('footers.index')
            ->with('success', 'Footer created successfully.');
    }

    public function show($id)
    {
        $footer = Footer::findOrFail($id);
        return view('footers.show', compact('footer'));
    }

    public function edit($id)
    {
        $footer = Footer::findOrFail($id);
        return view('footers.edit', compact('footer'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'about' => 'nullable|string',
            'fb_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'insta_link' => 'nullable|url',
            'github_link' => 'nullable|url',
            'skype_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
            'thread_link' => 'nullable|url',
            'codecanyon_link' => 'nullable|url',
            'ghurifiri_link' => 'nullable|url',
        ]);

        $footer = Footer::findOrFail($id);
        $footer->update($validatedData);

        return redirect()->route('footers.index')
            ->with('success', 'Footer updated successfully.');
    }

    public function destroy($id)
    {
        $footer = Footer::findOrFail($id);
        $footer->delete();

        return redirect()->route('footers.index')
            ->with('success', 'Footer deleted successfully.');
    }
}
