<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the services for admin.
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.service.index', compact('services')); // admin view
    }

    /**
     * Show the form for creating a new service.
     */
    public function create()
    {
        return view('admin.service.create'); // admin create view
    }

    /**
     * Store a newly created service in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'main_title' => 'required|string|max:255',
            'main_about' => 'required|string|max:255',
            'main_description' => 'required|string',

            'secondary_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'secondary_title' => 'required|string|max:255',
            'secondary_description' => 'required|string',

            'mini_image_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_title_1' => 'required|string|max:255',
            'mini_title_image_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_description_1' => 'required|string',
            'mini_about_1' => 'required|string|max:255',

            'mini_image_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_title_2' => 'required|string|max:255',
            'mini_title_image_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_description_2' => 'required|string',
            'mini_about_2' => 'required|string|max:255',

            'mini_image_3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_title_3' => 'required|string|max:255',
            'mini_title_image_3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mini_description_3' => 'required|string',
            'mini_about_3' => 'required|string|max:255',
        ]);

        // Handle image uploads
        $imageFields = [
            'icon',
            'main_image',
            'secondary_image',
            'mini_image_1',
            'mini_title_image_1',
            'mini_image_2',
            'mini_title_image_2',
            'mini_image_3',
            'mini_title_image_3',
        ];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $validated[$field] = $request->file($field)->store('services', 'public');
            }
        }

        Service::create($validated);

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }


    /**
     * Show the form for editing the specified service.
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service')); // admin edit view
    }

    /**
     * Update the specified service in storage.
     */
   public function update(Request $request, Service $service)
{
    $validated = $request->validate([
        'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'main_title' => 'required|string|max:255',
        'main_about' => 'required|string|max:255',
        'main_description' => 'required|string',

        'secondary_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'secondary_title' => 'required|string|max:255',
        'secondary_description' => 'required|string',

        'mini_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'mini_title_1' => 'required|string|max:255',
        'mini_title_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'mini_description_1' => 'required|string',
        'mini_about_1' =>'required|string|max:255',

        'mini_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'mini_title_2' => 'required|string|max:255',
        'mini_title_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'mini_description_2' => 'required|string',
        'mini_about_2' => 'required|string|max:255',

        'mini_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'mini_title_3' => 'required|string|max:255',
        'mini_title_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'mini_description_3' => 'required|string',
        'mini_about_3' => 'required|string|max:255',
    ]);

    // Handle image uploads
    $imageFields = [
        'icon',
        'main_image',
        'secondary_image',
        'mini_image_1',
        'mini_title_image_1',
        'mini_image_2',
        'mini_title_image_2',
        'mini_image_3',
        'mini_title_image_3',
    ];

    foreach ($imageFields as $field) {
        if ($request->hasFile($field)) {
            // If a new image is uploaded, replace the old one
            $validated[$field] = $request->file($field)->store('services', 'public');
        } else {
            // If no new image, keep the old one
            $validated[$field] = $service->$field;
        }
    }

    $service->update($validated);

    return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
}


    /**
     * Remove the specified service from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
