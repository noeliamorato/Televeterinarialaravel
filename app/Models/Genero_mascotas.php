<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero_mascotas extends Model
{
    use HasFactory;
    protected $filable =[
        'nombre_gen',
    ];
}
