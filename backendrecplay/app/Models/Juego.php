<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    protected $fillable = [
        'categoria', 'nombre', 'descripcion'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
