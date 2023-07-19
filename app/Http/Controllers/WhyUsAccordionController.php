<?php

namespace App\Http\Controllers;

use App\Models\WhyUsAccordion;
use Illuminate\Http\Request;

class WhyUsAccordionController extends Controller
{
    public function index()
    {
        $whyUsAccordions = WhyUsAccordion::all();
        return view('back.why_us_accordion.index', compact('whyUsAccordions'));
    }

    public function create()
    {
        return view('back.why_us_accordion.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'desc' => 'nullable|string',
        ]);

        WhyUsAccordion::create($validatedData);

        return redirect()->route('why-us-accordions.index')
            ->with('success', 'Why Us accordion created successfully.');
    }

    public function show($id)
    {
        $whyUsAccordion = WhyUsAccordion::findOrFail($id);
        return view('back.why_us_accordion.show', compact('whyUsAccordion'));
    }

    public function edit($id)
    {
        $whyUsAccordion = WhyUsAccordion::findOrFail($id);
        return view('back.why_us_accordion.edit', compact('whyUsAccordion'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'desc' => 'nullable|string',
        ]);

        $whyUsAccordion = WhyUsAccordion::findOrFail($id);
        $whyUsAccordion->update($validatedData);

        return redirect()->route('why-us-accordions.index')
            ->with('success', 'Why Us accordion updated successfully.');
    }

    public function destroy($id)
    {
        $whyUsAccordion = WhyUsAccordion::findOrFail($id);
        $whyUsAccordion->delete();

        return redirect()->route('why-us-accordions.index')
            ->with('success', 'Why Us accordion deleted successfully.');
    }
}
