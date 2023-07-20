<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        $faqs = FAQ::all();
        return view('back.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('back.faqs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'desc' => 'nullable|string',
        ]);

        FAQ::create($validatedData);

        return redirect()->route('faq.index')
            ->with('success', 'FAQ created successfully.');
    }

    public function show($id)
    {
        $faq = FAQ::findOrFail($id);
        return view('back.faqs.show', compact('faq'));
    }

    public function edit($id)
    {
        $faq = FAQ::findOrFail($id);
        return view('back.faqs.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'desc' => 'nullable|string',
        ]);

        $faq = FAQ::findOrFail($id);
        $faq->update($validatedData);

        return redirect()->route('faq.index')
            ->with('success', 'FAQ updated successfully.');
    }

    public function destroy($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->delete();

        return redirect()->route('faq.index')
            ->with('success', 'FAQ deleted successfully.');
    }
}
