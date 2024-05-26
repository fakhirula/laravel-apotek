<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $medicines = Medicine::with('category', 'supplier')->get();
        return view('dashboard', compact('medicines'));
    }
}
