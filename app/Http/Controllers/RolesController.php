<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        return Roles::all();
    }
    public function store(Request $request)
    { 
        //registrar a la base de datos
        $Rol=new Roles();
        $Rol->descripcion=$request->descripcion;
        $Rol->save();
        return $Rol;
    }
    // actualizar
    public function update(Request $request, $id)
    {
        $Rol=Roles::find($id);
        $Rol->descripcion=$request->descripcion;
        $Rol->save();
        return $Rol;
    }
    public function destroy($id)
    {
        return Roles::destroy($id);
    }
}
