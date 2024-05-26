<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Hashids\Hashids;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();

        return view('supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'contact_person' => 'required',
            'telp' => 'required',
        ]);

        Supplier::create($validatedData);

        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
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
        $supplier = Supplier::findOrFail($id)->first();

        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $hashid)
    {
        $hashids = new Hashids('', 8);
        $id = $hashids->decode($hashid);
        $supplier = Supplier::findOrFail($id[0]);

        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'contact_person' => 'required',
            'telp' => 'required',
        ]);

        $supplier->update($validatedData);

        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($hashid)
    {
        $hashids = new Hashids('', 8);
        $id = $hashids->decode($hashid);
        $supplier = Supplier::findOrFail($id)->first();
        $supplier->delete();

        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil dihapus.');
    }
}
