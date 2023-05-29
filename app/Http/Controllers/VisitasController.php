<?php

namespace App\Http\Controllers;

use App\Models\Visitas;
use Illuminate\Http\Request;

class VisitasController extends Controller
{
    public function index()
    {
        return Visitas::all();
    }
    public function store(Request $request)
    { 
        //registrar a la base de datos
        $Vis=new Visitas();
        $Vis->fecha_visita=$request->fecha_visita;
        $Vis->hora_visita=$request->hora_visita;
        $Vis->descripcion=$request->descripcion;
        $Vis->id_mascotas=$request->id_mascotas;
        $Vis->id_veterinarios=$request->id_veterinarios;
        $Vis->save();
        return $Vis;
    }
    // actualizar
    public function update(Request $request, $id)
    {
        $Vis=Visitas::find($id);
        $Vis->fecha_visita=$request->fecha_visita;
        $Vis->hora_visita=$request->hora_visita;
        $Vis->descripcion=$request->descripcion;
        $Vis->id_mascotas=$request->id_mascotas;
        $Vis->id_veterinarios=$request->id_veterinarios;
        $Vis->save();
        return $Vis;
    }
    public function destroy($id)
    {
        return Visitas::destroy($id);
    }
}
