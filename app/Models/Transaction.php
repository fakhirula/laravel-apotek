<?php

namespace App\Models;

use Hashids\Hashids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'id_user',
        'id_medicine',
        'quantity',
        'price',
        'tax',
        'total_payment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'id_medicine');
    }

    public function getHashidAttribute()
    {
        $hashids = new Hashids('', 8);
        return $hashids->encode($this->id);
    }
}
