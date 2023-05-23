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
        'observaciones',
        'id_estado_mascotas',
        'id_familia_mascotas',
        'id_genero_mascotas',
        'id_tipo_salida_mascotas',
        'id_veterinarios',
        'id_propietario_mascotas',
        'fecha_ingreso',
        'fecha_salida',
    ];
}
