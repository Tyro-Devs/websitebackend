<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQAccordion;

class FAQAccordionController extends Controller
{
    public function index()
    {
        $faqAccordions = FAQAccordion::all();
        return view('back.faq_accordions.index', compact('faqAccordions'));
    }

    public function create()
    {
        return view('back.faq_accordions.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'desc' => 'nullable|string',
        ]);

        FAQAccordion::create($validatedData);

        return redirect()->route('faq-acc.index')
            ->with('success', 'FAQ Accordion created successfully.');
    }

    public function show($id)
    {
        $faqAccordion = FAQAccordion::findOrFail($id);
        return view('back.faq_accordions.show', compact('faqAccordion'));
    }

    public function edit($id)
    {
        $faqAccordion = FAQAccordion::findOrFail($id);
        return view('back.faq_accordions.edit', compact('faqAccordion'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'desc' => 'nullable|string',
        ]);

        $faqAccordion = FAQAccordion::findOrFail($id);
        $faqAccordion->update($validatedData);

        return redirect()->route('faq-acc.index')
            ->with('success', 'FAQ Accordion updated successfully.');
    }

    public function destroy($id)
    {
        $faqAccordion = FAQAccordion::findOrFail($id);
        $faqAccordion->delete();

        return redirect()->route('faq-acc.index')
            ->with('success', 'FAQ Accordion deleted successfully.');
    }
}

