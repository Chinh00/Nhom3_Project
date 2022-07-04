<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'offer_price',
        'disscount',
        'quantity',
        'content',
        'ratings',
        'configuration',
        'status',
        'condition',
        'deleted'
    ];
}
