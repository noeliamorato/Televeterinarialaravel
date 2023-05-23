<?php

namespace App\Http\Controllers;

use App\Models\Familia_mascotas;
use Illuminate\Http\Request;

class Familia_mascotasController extends Controller
{
    public function index()
    {
        return Familia_mascotas::all();
    }
    public function store(Request $request)
    { 
        //registrar a la base de datos
        $Fammas=new Familia_mascotas();
        $Fammas->nombre_fam=$request->nombre_fam;
        $Fammas->save();
        return $Fammas;
    }
    // actualizar
    public function update(Request $request, $id)
    {
        $Fammas=Familia_mascotas::find($id);
        $Fammas->nombre_fam=$request->nombre_fam;
        $Fammas->save();
        return $Fammas;
    }
    public function destroy($id)
    {
        return Familia_mascotas::destroy($id);
    }
}
