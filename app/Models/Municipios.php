<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    use HasFactory;
    protected $filable =[
        'nombre_mun',
        'id_departamentos',
    ];
}