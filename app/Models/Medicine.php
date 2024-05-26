<?php

namespace App\Models;

use Hashids\Hashids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_category',
        'price',
        'stock',
        'image',
        'description',
        'id_supplier'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier');
    }

    public function getHashidAttribute()
    {
        $hashids = new Hashids('', 8);
        return $hashids->encode($this->id);
    }
}
