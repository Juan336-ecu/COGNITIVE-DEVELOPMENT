<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'terapeuta', 'nombre', 'domicilio','fecha_naciemiento','instruccion','ocupacion_anterior','pasatiempo','fecha_ingreso','motivo_ingreso',
        'estado_civil','nombre_conyuge','celular_conyuge','nombre_familiar_1',
        'parentesco_familiar_1'
        ,'direccion_familiar_1'
        ,'celular_familiar_1'
        ,'nombre_familiar_2'
        ,'parentesco_familiar_2'
        ,'direccion_familiar_2'
        ,'celular_familiar_2'
        ,'diagnostico'
        ,'medicamento'
        ,'doctor'
        ,'movilidad'
        ,'contraindicaciones'
        ,'observacion'
        ,'precio'
        ,'calificacion',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
