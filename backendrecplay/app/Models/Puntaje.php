<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puntaje extends Model
{
    protected $fillable = [
        'juego', 'fecha', 'tiempo','puntos','paciente',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
