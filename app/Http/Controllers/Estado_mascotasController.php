<?php

namespace App\Http\Controllers;

use App\Models\Estado_mascotas;
use Illuminate\Http\Request;

class Estado_mascotasController extends Controller
{
    public function index()
    {
        return Estado_mascotas::all();
    }
    public function store(Request $request)
    { 
        //registrar a la base de datos
        $Estmas=new Estado_mascotas();
        $Estmas->nombre_est=$request->nombre_est;
        $Estmas->save();
        return $Estmas;
    }
    // actualizar
    public function update(Request $request, $id)
    {
        $Estmas=Estado_mascotas::find($id);
        $Estmas->nombre_est=$request->nombre_est;
        $Estmas->save();
        return $Estmas;
    }
    public function destroy($id)
    {
        return Estado_mascotas::destroy($id);
    }
}
