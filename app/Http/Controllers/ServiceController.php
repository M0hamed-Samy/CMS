<?php
namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('user.index', compact('services')); // This is the user view
    }
    public function show(Service $service)
    {
        return view('user.service.index', compact('service')); // This is the user service detail view
    }
}
