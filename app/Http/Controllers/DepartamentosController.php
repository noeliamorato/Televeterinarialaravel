<?php

namespace App\Http\Controllers;

use App\Models\Departamentos;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    public function index()
    {
        return Departamentos::all();
    }
    public function store(Request $request)
    { 
        //registrar a la base de datos
        $Dep=new Departamentos();
        $Dep->nombre_dep=$request->nombre_dep;
        $Dep->municipio=$request->municipio;
        $Dep->save();
        return $Dep;
    }
    // actualizar
    public function update(Request $request, $id)
    {
        $Dep=Departamentos::find($id);
        $Dep->nombre_dep=$request->nombre_dep;
        $Dep->municipio=$request->municipio;
        $Dep->save();
        return $Dep;
    }
    public function destroy($id)
    {
        return Departamentos::destroy($id);
    }

}
