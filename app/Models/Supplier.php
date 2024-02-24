<?php

namespace App\Models;

use Hashids\Hashids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'contact_person',
        'telp',
    ];

    public function getHashidAttribute()
    {
        $hashids = new Hashids('', 8);
        return $hashids->encode($this->id);
    }
}
