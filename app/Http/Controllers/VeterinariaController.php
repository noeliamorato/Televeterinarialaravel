<?php

namespace App\Http\Controllers;

use App\Models\Veterinaria;
use Illuminate\Http\Request;
class VeterinariaController extends Controller
{
    public function index()
    {
        return Veterinaria::all();
    }
    public function store(Request $request)
    { 
        //registrar a la base de datos
        $Vet=new Veterinaria();
        $Vet->ci=$request->ci;
        $Vet->nombres=$request->nombres;
        $Vet->apellidos=$request->apellidos;
        $Vet->genero=$request->genero;
        $Vet->id_especializaciones=$request->id_especializaciones;
        $Vet->telefono=$request->telefono;
        $Vet->save();
        return $Vet;
    }
    // actualizar
    public function update(Request $request, $id)
    {
        $Vet=Veterinaria::find($id);
        $Vet->ci=$request->ci;
        $Vet->nombres=$request->nombres;
        $Vet->apellidos=$request->apellidos;
        $Vet->genero=$request->genero;
        $Vet->id_especializaciones=$request->id_especializaciones;
        $Vet->telefono=$request->telefono;
        $Vet->save();
        return $Vet;
    }
    public function destroy($id)
    {
        return Veterinaria::destroy($id);
    }
}
