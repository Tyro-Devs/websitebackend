<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ToolController extends Controller
{
    public function index()
    {
        $tools = Tool::all();
        return view('back.tool.index', compact('tools'));
    }

    public function create()
    {
        return view('back.tool.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = 'images/' . $imageName;
        }


        Tool::create($validatedData);

        return redirect()->route('back.tool.index')
            ->with('success', 'Tool created successfully.');
    }

    public function show($id)
    {
        $tool = Tool::findOrFail($id);
        return view('tools.show', compact('tool'));
    }

    public function edit($id)
    {
        $tool = Tool::findOrFail($id);
        return view('back.tool.edit', compact('tool'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|string',
        ]);

        $tool = Tool::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete previous image if it exists
            if ($tool->image) {
                Storage::delete('public/' . $tool->image);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = 'images/' . $imageName;
        }
        $tool->update($validatedData);

        return redirect()->route('tools.index')
            ->with('success', 'Tool updated successfully.');
    }

    public function destroy($id)
    {
        $tool = Tool::findOrFail($id);
        $tool->delete();

        return redirect()->route('tools.index')
            ->with('success', 'Tool deleted successfully.');
    }
}
