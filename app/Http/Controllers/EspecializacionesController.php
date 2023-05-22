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
        $Espe=new Especializaciones();
        $Espe->nombre=$request->nombre;
        $Espe->descripcion=$request->descripcion;
        $Espe->save();
        return $Espe;
    }
    // actualizar
    public function update(Request $request, $id)
    {
        $Espe=Especializaciones::find($id);
        $Espe->nombre=$request->nombre;
        $Espe->descripcion=$request->descripcion;
        $Espe->save();
        return $Espe;
    }
    public function destroy($id)
    {
        return Especializaciones::destroy($id);
    }
}
