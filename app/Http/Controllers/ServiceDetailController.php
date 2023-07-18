<?php

namespace App\Http\Controllers;

use App\Models\ServiceDetail;
use Illuminate\Http\Request;

class ServiceDetailController extends Controller
{
    public function index()
    {
        $serviceDetails = ServiceDetail::all();
        return view('service_details.index', compact('serviceDetails'));
    }

    public function create()
    {
        return view('service_details.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'short_desc' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/images');
            $validatedData['logo'] = $logoPath;
        }

        ServiceDetail::create($validatedData);

        return redirect()->route('service_details.index')
            ->with('success', 'Service detail created successfully.');
    }

    public function show($id)
    {
        $serviceDetail = ServiceDetail::findOrFail($id);
        return view('service_details.show', compact('serviceDetail'));
    }

    public function edit($id)
    {
        $serviceDetail = ServiceDetail::findOrFail($id);
        return view('service_details.edit', compact('serviceDetail'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'short_desc' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $serviceDetail = ServiceDetail::findOrFail($id);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/images');
            $validatedData['logo'] = $logoPath;
        }

        $serviceDetail->update($validatedData);

        return redirect()->route('service_details.index')
            ->with('success', 'Service detail updated successfully.');
    }

    public function destroy($id)
    {
        $serviceDetail = ServiceDetail::findOrFail($id);
        $serviceDetail->delete();

        return redirect()->route('service_details.index')
            ->with('success', 'Service detail deleted successfully.');
    }
}
