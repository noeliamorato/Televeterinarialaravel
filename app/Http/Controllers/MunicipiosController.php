<?php

namespace App\Http\Controllers;

use App\Models\Municipios;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{
    public function index()
    {
        return Municipios::all();
    }
    public function store(Request $request)
    { 
        //registrar a la base de datos
        $Mun=new Municipios();
        $Mun->nombre_mun=$request->nombre_mun;
        $Mun->id_departamentos=$request->id_departamentos;
        $Mun->save();
        return $Mun;
    }
    // actualizar
    public function update(Request $request, $id)
    {
        $Mun=Municipios::find($id);
        $Mun->nombre_mun=$request->nombre_mun;
        $Mun->id_departamentos=$request->id_departamentos;
        $Mun->save();
        return $Mun;
    }
    public function destroy($id)
    {
        return Municipios::destroy($id);
    }
}
