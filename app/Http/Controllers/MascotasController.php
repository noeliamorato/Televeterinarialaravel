<?php

namespace App\Http\Controllers;

use App\Models\Mascotas;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    public function index()
    {
        return Mascotas::all();
    }
    public function store(Request $request)
    { 
        //registrar a la base de datos
        $Masc=new Mascotas();
        $Masc->nombre=$request->nombre;
        $Masc->fecha_nacimiento=$request->fecha_nacimiento;
        $Masc->edad=$request->edad;
        $Masc->raza=$request->raza;
        $Masc->color=$request->color;
        $Masc->peso=$request->peso;
        $Masc->longitud=$request->longitud;
        $Masc->vacunas=$request->vacunas;
        $Masc->foto=$request->foto;
        $Masc->genero=$request->genero;
        $Masc->estado_ingreso=$request->estado_ingreso;
        $Masc->estado_salida=$request->estado_salida;
        $Masc->fecha_ingreso=$request->fecha_ingreso;
        $Masc->fecha_salida=$request->fecha_salida;
        $Masc->observaciones=$request->observaciones;
        $Masc->id_familia_mascotas=$request->id_familia_mascotas;
        $Masc->id_veterinarios=$request->id_veterinarios;
        $Masc->id_propietario_mascotas=$request->id_propietario_mascotas;
        $Masc->save();
        return $Masc;
    }
    // actualizar
    public function update(Request $request, $id)
    {
        $Masc=Mascotas::find($id);
        $Masc->nombre=$request->nombre;
        $Masc->fecha_nacimiento=$request->fecha_nacimiento;
        $Masc->edad=$request->edad;
        $Masc->raza=$request->raza;
        $Masc->color=$request->color;
        $Masc->peso=$request->peso;
        $Masc->longitud=$request->longitud;
        $Masc->vacunas=$request->vacunas;
        $Masc->foto=$request->foto;
        $Masc->genero=$request->genero;
        $Masc->estado_ingreso=$request->estado_ingreso;
        $Masc->estado_salida=$request->estado_salida;
        $Masc->fecha_ingreso=$request->fecha_ingreso;
        $Masc->fecha_salida=$request->fecha_salida;
        $Masc->observaciones=$request->observaciones;
        $Masc->id_familia_mascotas=$request->id_familia_mascotas;
        $Masc->id_veterinarios=$request->id_veterinarios;
        $Masc->id_propietario_mascotas=$request->id_propietario_mascotas;
        $Masc->save();
        return $Masc;
    }
    public function destroy($id)
    {
        return Mascotas::destroy($id);
    }
}
