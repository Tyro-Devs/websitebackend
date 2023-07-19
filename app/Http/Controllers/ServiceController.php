<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('back.services.index', compact('services'));
    }

    public function create()
    {
        return view('back.services.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'desc' => 'nullable|string',
        ]);

        Service::create($validatedData);

        return redirect()->route('services.index')
            ->with('success', 'Service created successfully.');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('back.services.show', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('back.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'desc' => 'nullable|string',
        ]);

        $service = Service::findOrFail($id);
        $service->update($validatedData);

        return redirect()->route('services.index')
            ->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')
            ->with('success', 'Service deleted successfully.');
    }
}
