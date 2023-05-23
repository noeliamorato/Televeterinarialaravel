<?php

namespace App\Http\Controllers;

use App\Models\Genero_mascotas;
use Illuminate\Http\Request;

class Genero_mascotasController extends Controller
{
    public function index()
    {
        return Genero_mascotas::all();
    }
    public function store(Request $request)
    { 
        //registrar a la base de datos
        $Genmas=new Genero_mascotas();
        $Genmas->nombre_gen=$request->nombre_gen;
        $Genmas->save();
        return $Genmas;
    }
    // actualizar
    public function update(Request $request, $id)
    {
        $Genmas=Genero_mascotas::find($id);
        $Genmas->nombre_gen=$request->nombre_gen;
        $Genmas->save();
        return $Genmas;
    }
    public function destroy($id)
    {
        return Genero_mascotas::destroy($id);
    }
}
