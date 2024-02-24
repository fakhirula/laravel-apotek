<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Medicine;
use App\Models\Supplier;
use Hashids\Hashids;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicines = Medicine::with('category', 'supplier')->get();

        return view('medicine.index', compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('medicine.create', compact('categories', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'id_category' => 'required',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'id_supplier' => 'required'
        ]);

        Medicine::create($validatedData);

        return redirect()->route('medicine.index')->with('success', 'Medicine berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
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
        $medicine = Medicine::findOrFail($id)->first();

        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('medicine.edit', compact('medicine', 'categories', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $hashid)
    {
        $hashids = new Hashids('', 8);
        $id = $hashids->decode($hashid);
        $medicine = Medicine::findOrFail($id[0]);

        $validatedData = $request->validate([
            'name' => 'required',
            'id_category' => 'required',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'id_supplier' => 'required'
        ]);

        $medicine->update($validatedData);

        return redirect()->route('medicine.index')->with('success', 'Medicine berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($hashid)
    {
        $hashids = new Hashids('', 8);
        $id = $hashids->decode($hashid);
        $medicine = Medicine::findOrFail($id)->first();
        $medicine->delete();

        return redirect()->route('medicine.index')->with('success', 'Medicine berhasil dihapus.');
    }
}
