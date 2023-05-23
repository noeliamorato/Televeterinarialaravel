<?php

namespace App\Http\Controllers;

use App\Models\Tipo_salida_mascotas;
use Illuminate\Http\Request;

class Tipo_salida_mascotasController extends Controller
{
    public function index()
    {
        return Tipo_salida_mascotas::all();
    }
    public function store(Request $request)
    { 
        //registrar a la base de datos
        $Tipsalmas=new Tipo_salida_mascotas();
        $Tipsalmas->descripcion=$request->descripcion;
        $Tipsalmas->save();
        return $Tipsalmas;
    }
    // actualizar
    public function update(Request $request, $id)
    {
        $Tipsalmas=Tipo_salida_mascotas::find($id);
        $Tipsalmas->descripcion=$request->descripcion;
        $Tipsalmas->save();
        return $Tipsalmas;
    }
    public function destroy($id)
    {
        return Tipo_salida_mascotas::destroy($id);
    }
}
