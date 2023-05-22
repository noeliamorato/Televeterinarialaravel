<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinaria extends Model
{
    use HasFactory;
    protected $filable =[
        'ci',
        'nombres',
        'apellidos',
        'id_especializaciones',
        'genero',
        'telefono',

    ];
}
