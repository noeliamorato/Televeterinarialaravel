<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index()
    {
        return Empleados::all();
    }
    public function store(Request $request)
    { 
        //registrar a la base de datos
        $Emp=new Empleados();
        $Emp->ci=$request->ci;
        $Emp->nombres=$request->nombres;
        $Emp->apellidos=$request->apellidos;
        $Emp->genero=$request->genero;
        $Emp->foto=$request->foto;
        $Emp->direccion=$request->direccion;
        $Emp->telefono=$request->telefono;
        $Emp->telf_movil=$request->telf_movil;
        $Emp->correo=$request->correo;
        $Emp->id_roles=$request->id_roles;
        $Emp->id_especializaciones=$request->id_especializaciones;
        $Emp->id_departamentos=$request->id_departamentos;
        $Emp->save();
        return $Emp;
    }
    // actualizargit 
    public function update(Request $request, $id)
    {
        $Emp=Empleados::find($id);
        $Emp->ci=$request->ci;
        $Emp->nombres=$request->nombres;
        $Emp->apellidos=$request->apellidos;
        $Emp->genero=$request->genero;
        $Emp->foto=$request->foto;
        $Emp->direccion=$request->direccion;
        $Emp->telefono=$request->telefono;
        $Emp->telf_movil=$request->telf_movil;
        $Emp->correo=$request->correo;
        $Emp->id_roles=$request->id_roles;
        $Emp->id_especializaciones=$request->id_especializaciones;
        $Emp->id_departamentos=$request->id_departamentos;
        $Emp->save();
        return $Emp;
    }
    public function destroy($id)
    {
        return Empleados::destroy($id);
    }
}
