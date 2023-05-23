<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitas extends Model
{
    use HasFactory;
    protected $filable =[
        'fecha_visita',
        'hora_visita',
        'descripcion',
        'id_mascotas',
        'id_veterinarios',
    ];
}
