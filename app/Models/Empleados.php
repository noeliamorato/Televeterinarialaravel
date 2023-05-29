<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;
    protected $filable =[
        'ci',
        'nombres',
        'apellidos',
        'genero',
        'foto',
        'direccion',
        'telefono',
        'telf_movil',
        'correo',
        'id_roles',
        'id_especializaciones',
        'id_departamentos',
    ];
}
