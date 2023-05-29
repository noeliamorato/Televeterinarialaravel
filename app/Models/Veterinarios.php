<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinarios extends Model
{
    use HasFactory;
    protected $filable =[
        'ci',
        'id_empleados',
    ];
}
