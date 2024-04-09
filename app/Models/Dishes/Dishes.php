<?php

namespace App\Models\Dishes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{
    use HasFactory;
    protected $table = 'dishes';

    protected $fillable = [
        'id ',
        'name',
        'restaurant',
        'availableMeals',
    ];
}
