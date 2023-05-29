<?php

namespace App\Http\Controllers;

use App\Models\Especializaciones;
use Illuminate\Http\Request;

class EspecializacionesController extends Controller
{
    public function index()
    {
        return Especializaciones::all();
    }
    public function store(Request $request)
    { 
        //registrar a la base de datos
        $Esp=new Especializaciones();
        $Esp->nombre_esp=$request->nombre_esp;
        $Esp->descripcion=$request->descripcion;
        $Esp->save();
        return $Esp;
    }
    // actualizar
    public function update(Request $request, $id)
    {
        $Esp=Especializaciones::find($id);
        $Esp->nombre_esp=$request->nombre_esp;
        $Esp->descripcion=$request->descripcion;
        $Esp->save();
        return $Esp;
    }
    public function destroy($id)
    {
        return Especializaciones::destroy($id);
    }
}
