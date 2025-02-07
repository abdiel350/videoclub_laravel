<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Permite la asignación masiva de estos campos
    protected $fillable = ['title', 'year', 'director', 'poster', 'synopsis', 'rented', 'rentend'];

}
