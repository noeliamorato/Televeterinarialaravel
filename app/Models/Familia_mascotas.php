<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia_mascotas extends Model
{
    use HasFactory;
    protected $filable =[
        'nombre_fam',
    ];
}
