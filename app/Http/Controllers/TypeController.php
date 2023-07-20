<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('back.types.index', compact('types'));
    }

    public function create()
    {
        return view('back.types.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string',
        ]);

        Type::create($validatedData);

        return redirect()->route('type.index')
            ->with('success', 'Type created successfully.');
    }

    public function show($id)
    {
        $type = Type::findOrFail($id);
        return view('back.types.show', compact('type'));
    }

    public function edit($id)
    {
        $type = Type::findOrFail($id);
        return view('back.types.edit', compact('type'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string',
        ]);

        $type = Type::findOrFail($id);
        $type->update($validatedData);

        return redirect()->route('type.index')
            ->with('success', 'Type updated successfully.');
    }

    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();

        return redirect()->route('type.index')
            ->with('success', 'Type deleted successfully.');
    }
}
