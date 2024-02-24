<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'date' => '2024-01-01',
            'id_user' => '2',
            'id_medicine' => '1',
            'quantity' => '2',
            'price' => '2000',
            'tax' => '10',
            'total_payment' => '4200'
        ]);
    }
}
