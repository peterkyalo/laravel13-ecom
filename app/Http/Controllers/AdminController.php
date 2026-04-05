<?php

namespace App\Http\Controllers;

use App\Models\Brand;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    
    public function brands()
    {
        // Fetch all brands from the database, ordered by ID in descending order
        $brands = Brand::orderBy('id', 'desc')->get();
        return view('admin.brands', compact('brands'));
    }

}