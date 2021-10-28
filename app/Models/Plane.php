<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    use HasFactory;

    protected $table = 'planes';

    protected $fillable = [
        'name',
        'brand_id',
        'detail',
        'engine',
        'slot',
        'length',
        'wingspan',
        'cruisespeed',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
