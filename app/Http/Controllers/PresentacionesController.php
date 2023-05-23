<?php

namespace App\Http\Controllers;

use App\Models\Presentaciones;
use Illuminate\Http\Request;

class PresentacionesController extends Controller
{
    public function index()
    {
        return Presentaciones::all();
    }
    public function store(Request $request)
    { 
        //registrar a la base de datos
        $Presen=new Presentaciones();
        $Presen->titulo=$request->titulo;
        $Presen->subtitulo=$request->subtitulo;
        $Presen->descripcion=$request->descripcion;
        $Presen->imagen=$request->imagen;
        $Presen->save();
        return $Presen;
    }
    // actualizar
    public function update(Request $request, $id)
    {
        $Presen=Presentaciones::find($id);
        $Presen->descripcion=$request->descripcion;
        $Presen->save();
        return $Presen;
    }
    public function destroy($id)
    {
        return Presentaciones::destroy($id);
    }
}
