<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentaciones extends Model
{
    use HasFactory;
    protected $filable =[
        'titulo',
        'subtitulo',
        'descripcion',
        'imagen',
    ];
}
