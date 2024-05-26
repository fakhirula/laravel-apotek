<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Hashids\Hashids;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Category::create($validatedData);

        return redirect()->route('category.index')->with('success', 'Category berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($hashid)
    {
        $hashids = new Hashids('', 8);
        $id = $hashids->decode($hashid);
        $category = Category::findOrFail($id)->first();

        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $hashid)
    {
        $hashids = new Hashids('', 8);
        $id = $hashids->decode($hashid);
        $category = Category::findOrFail($id[0]);

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $category->update($validatedData);

        return redirect()->route('category.index')->with('success', 'Category berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($hashid)
    {
        $hashids = new Hashids('', 8);
        $id = $hashids->decode($hashid);
        $category = Category::findOrFail($id)->first();
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category berhasil dihapus.');
    }
}
