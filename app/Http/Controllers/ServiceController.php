<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request; // Pastikan Request di-import

class ServiceController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');

        // Query data
        $services = Service::query()
            ->when($search, function($query) use ($search) {
                return $query->where('nama', 'like', "%{$search}%")
                             ->orWhere('deskripsi', 'like', "%{$search}%");
            })
            ->latest() 
            ->get();  

        return view('pages.services', compact('services'));
    }
}