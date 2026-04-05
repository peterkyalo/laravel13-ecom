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
        $brands = Brand::orderBy('id', 'desc')->paginate(10); // Paginate results, 10 per page
        return view('admin.brands', compact('brands'));
    }
    # Create brand method
    public function addBrand()
    {
        return view('admin.brand-add');
    }

}