<?php

namespace App\Http\Controllers;

use App\Models\Veterinarios;
use Illuminate\Http\Request;

class VeterinariosController extends Controller
{
    public function index()
    {
        return Veterinarios::all();
    }
    public function store(Request $request)
    { 
        //registrar a la base de datos
        $Vet=new Veterinarios();
        $Vet->ci=$request->ci;
        $Vet->id_empleados=$request->id_empleados;
        $Vet->save();
        return $Vet;
    }
    // actualizar
    public function update(Request $request, $id)
    {
        $Vet=Veterinarios::find($id);
        $Vet->ci=$request->ci;
        $Vet->id_empleados=$request->id_empleados;
        $Vet->save();
        return $Vet;
    }
    public function destroy($id)
    {
        return Veterinarios::destroy($id);
    }
}
