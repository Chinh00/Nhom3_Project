<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $table = 'discount';
    protected $fillable = [
        'id',
        'product_id',
        'time_start',
        'time_end',
        'status',
        'created_at',
        'updated_at',
        'percent'
    ];
}
