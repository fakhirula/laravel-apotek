<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::with('user', 'medicine')->get();

        return view('transaction.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $medicines = Medicine::all();

        return view('transaction.create', compact('users', 'medicines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_medicine' => 'required',
            'quantity' => 'required|integer',
        ]);

        $validatedData['id_user'] = auth()->id();

        $medicine = Medicine::find($validatedData['id_medicine']);
        $medicine->stock -= $validatedData['quantity'];
        $validatedData['price']  = $medicine->price;

        $validatedData['date'] = now();
        $validatedData['tax'] = 10/100 * $validatedData['price'];
        $validatedData['total_payment'] = ($validatedData['quantity'] * $validatedData['price']) + $validatedData['tax'];

        Transaction::create($validatedData);
        $medicine->save();
        

        return redirect()->route('transaction.index')->with('success', 'Transaction berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
