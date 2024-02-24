<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Supplier;
use App\Models\Supply;
use App\Models\User;
use Illuminate\Http\Request;

class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplies = Supply::with('user', 'supplier', 'medicine')->get();

        return view('supply.index', compact('supplies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $suppliers = Supplier::all();
        $medicines = Medicine::all();

        return view('supply.create', compact('users', 'suppliers', 'medicines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_supplier' => 'required',
            'id_medicine' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
        ]);

        $validatedData['id_user'] = auth()->id();

        $validatedData['date'] = now();
        $validatedData['total_payment'] = $validatedData['quantity'] * $validatedData['price'];

        Supply::create($validatedData);

        $medicine = Medicine::find($validatedData['id_medicine']);
        $medicine->stock += $validatedData['quantity'];
        $medicine->save();

        return redirect()->route('supply.index')->with('success', 'Supply berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supply $supply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($hashid)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request$request, $hashid)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supply $supply)
    {
        //
    }
}
