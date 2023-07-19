<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('back.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        $types = Type::all();
        return view('back.portfolios.create', compact('types'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'type_id' => 'required|exists:types,id',
            'client' => 'nullable|string',
            'live_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'desc' => 'nullable|string',
        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = 'images/' . $imageName;
        }

        Portfolio::create($validatedData);

        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio created successfully.');
    }

    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('back.portfolios.show', compact('portfolio'));
    }

    public function edit($id)
    {
        $types = Type::all();
        $portfolio = Portfolio::findOrFail($id);
        return view('back.portfolios.edit', compact('portfolio','types'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'type_id' => 'required|exists:types,id',
            'client' => 'nullable|string',
            'live_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'desc' => 'nullable|string',
        ]);

        $portfolio = Portfolio::findOrFail($id);
        if ($request->hasFile('image')) {
            // Delete previous image if it exists
            if ($portfolio->image) {
                Storage::delete('public/' . $portfolio->image);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = 'images/' . $imageName;
        }

        $portfolio->update($validatedData);

        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio updated successfully.');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio deleted successfully.');
    }
}
