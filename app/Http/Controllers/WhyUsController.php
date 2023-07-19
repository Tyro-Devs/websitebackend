<?php

namespace App\Http\Controllers;

use App\Models\WhyUs;
use Illuminate\Http\Request;

class WhyUsController extends Controller
{
    public function index()
    {
        $whyUs = WhyUs::all();
        return view('back.why_us.index', compact('whyUs'));
    }

    public function create()
    {
        return view('back.why_us.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'why_us_about' => 'nullable|string',
        ]);

        WhyUs::create($validatedData);

        return redirect()->route('why-us.index')
            ->with('success', 'Why Us section created successfully.');
    }

    public function show($id)
    {
        $whyUs = WhyUs::findOrFail($id);
        return view('back.why_us.show', compact('whyUs'));
    }

    public function edit($id)
    {
        $whyUs = WhyUs::findOrFail($id);
        return view('back.why_us.edit', compact('whyUs'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'why_us_about' => 'nullable|string',
        ]);

        $whyUs = WhyUs::findOrFail($id);
        $whyUs->update($validatedData);

        return redirect()->route('why-us.index')
            ->with('success', 'Why Us section updated successfully.');
    }

    public function destroy($id)
    {
        $whyUs = WhyUs::findOrFail($id);
        $whyUs->delete();

        return redirect()->route('why-us.index')
            ->with('success', 'Why Us section deleted successfully.');
    }
}
