<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the services.
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new service.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created service in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'about' => 'nullable|string|max:255',
            'description1' => 'required|string',
            'importance' => 'required|string',
            'small_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_title' => 'nullable|string|max:255',
            'description2' => 'nullable|string',
            'large_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_one_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_two_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_three_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image uploads
        foreach (['icon', 'title_image', 'small_image', 'large_image', 'mini_one_image', 'mini_two_image', 'mini_three_image'] as $field) {
            if ($request->hasFile($field)) {
                $validated[$field] = $request->file($field)->store('services', 'public');
            }
        }

        Service::create($validated);

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    /**
     * Show the form for editing the specified service.
     */
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified service in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'about' => 'nullable|string|max:255',
            'description1' => 'required|string',
            'importance' => 'required|string',
            'small_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_title' => 'nullable|string|max:255',
            'description2' => 'nullable|string',
            'large_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_one_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_two_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_three_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image uploads
        foreach (['icon', 'title_image', 'small_image', 'large_image', 'mini_one_image', 'mini_two_image', 'mini_three_image'] as $field) {
            if ($request->hasFile($field)) {
                $validated[$field] = $request->file($field)->store('services', 'public');
            }
        }

        $service->update($validated);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified service from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
