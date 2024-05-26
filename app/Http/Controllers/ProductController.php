<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Hashids\Hashids;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $medicines = Medicine::with('category', 'supplier')->get();
        return view('product.index', compact('medicines'));
    }

    public function show($hashid)
    {
        $hashids = new Hashids('', 8);
        $id = $hashids->decode($hashid)[0];
        $product = Medicine::findOrFail($id);

        return view('product.detail', compact('product'));
    }
}
