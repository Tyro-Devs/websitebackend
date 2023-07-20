<?php

namespace App\Http\Controllers;

use App\Models\ServiceDetail;
use Illuminate\Http\Request;

class ServiceDetailController extends Controller
{
    public function index()
    {
        $serviceDetails = ServiceDetail::all();
        return view('back.service_details.index', compact('serviceDetails'));
    }

    public function create()
    {
        return view('back.service_details.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'short_desc' => 'nullable|string',
            'logo' => 'nullable|string',
        ]);



        ServiceDetail::create($validatedData);

        return redirect()->route('service-detali.index')
            ->with('success', 'Service detail created successfully.');
    }

    public function show($id)
    {
        $serviceDetail = ServiceDetail::findOrFail($id);
        return view('back.service_details.show', compact('serviceDetail'));
    }

    public function edit($id)
    {
        $serviceDetail = ServiceDetail::findOrFail($id);
        return view('back.service_details.edit', compact('serviceDetail'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'short_desc' => 'nullable|string',
            'logo' => 'nullable|string',
        ]);

        $serviceDetail = ServiceDetail::findOrFail($id);



        $serviceDetail->update($validatedData);

        return redirect()->route('service-detali.index')
            ->with('success', 'Service detail updated successfully.');
    }

    public function destroy($id)
    {
        $serviceDetail = ServiceDetail::findOrFail($id);
        $serviceDetail->delete();

        return redirect()->route('service-detali.index')
            ->with('success', 'Service detail deleted successfully.');
    }
}
