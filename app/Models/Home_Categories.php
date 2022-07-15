<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_Categories extends Model
{
    use HasFactory;
    protected $table = 'home_categories';
    protected $fillable = [
        'id',
        'category_id',
        'created_at',
        'updated_at',

    ];
}
