<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terapeuta extends Model
{
    protected $fillable = [
        'nombre', 'cedula','email','celular','observacion',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
