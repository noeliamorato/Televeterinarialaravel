<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    use HasFactory;
    protected $filable =[
        'nombre',
        'fecha_nacimiento',
        'edad',
        'raza',
        'color',
        'peso',
        'longitud',
        'vacunas',
        'foto',
        'genero',
        'estado_ingreso',
        'estado_salida',
        'fecha_ingreso',
        'fecha_salida',
        'observaciones',
        'id_familia_mascotas',
        'id_veterinarios',
        'id_propietario_mascotas',

    ];
}
