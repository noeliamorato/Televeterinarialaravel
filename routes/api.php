<?php

use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\EspecializacionesController;
use App\Http\Controllers\Familia_mascotasController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\PresentacionesController;
use App\Http\Controllers\Propietario_mascotasController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\VeterinariosController;
use App\Http\Controllers\VisitasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Roles', [RolesController::class, 'index']);
Route::post('/Roles', [RolesController::class, 'store']);
Route::put('/Roles/{id}', [RolesController::class, 'update']);
Route::delete('/Roles/{id}', [RolesController::class, 'destroy']);

Route::get('/Especializaciones', [EspecializacionesController::class, 'index']);
Route::post('/Especializaciones', [EspecializacionesController::class, 'store']);
Route::put('/Especializaciones/{id}', [EspecializacionesController::class, 'update']);
Route::delete('/Especializaciones/{id}', [EspecializacionesController::class, 'destroy']);

Route::get('/Departamentos', [DepartamentosController::class, 'index']);
Route::post('/Departamentos', [DepartamentosController::class, 'store']);
Route::put('/Departamentos/{id}', [DepartamentosController::class, 'update']);
Route::delete('/Departamentos/{id}', [DepartamentosController::class, 'destroy']);

Route::get('/Empleados', [EmpleadosController::class, 'index']);
Route::post('/Empleados', [EmpleadosController::class, 'store']);
Route::put('/Empleados/{id}', [EmpleadosController::class, 'update']);
Route::delete('/Empleados/{id}', [EmpleadosController::class, 'destroy']);

Route::get('/Veterinarios', [VeterinariosController::class, 'index']);
Route::post('/Veterinarios', [VeterinariosController::class, 'store']);
Route::put('/Veterinarios/{id}', [VeterinariosController::class, 'update']);
Route::delete('/Veterinarios/{id}', [VeterinariosController::class, 'destroy']);

Route::get('/Propietario_mascotas', [Propietario_mascotasController::class, 'index']);
Route::post('/Propietario_mascotas', [Propietario_mascotasController::class, 'store']);
Route::put('/Propietario_mascotas/{id}', [Propietario_mascotasController::class, 'update']);
Route::delete('/Propietario_mascotas/{id}', [Propietario_mascotasController::class, 'destroy']);

Route::get('/Familia_mascotas', [Familia_mascotasController::class, 'index']);
Route::post('/Familia_mascotas', [Familia_mascotasController::class, 'store']);
Route::put('/Familia_mascotas/{id}', [Familia_mascotasController::class, 'update']);
Route::delete('/Familia_mascotas/{id}', [Familia_mascotasController::class, 'destroy']);

Route::get('/Mascotas', [MascotasController::class, 'index']);
Route::post('/Mascotas', [MascotasController::class, 'store']);
Route::put('/Mascotas/{id}', [MascotasController::class, 'update']);
Route::delete('/Mascotas/{id}', [MascotasController::class, 'destroy']);

Route::get('/Visitas', [VisitasController::class, 'index']);
Route::post('/Visitas', [VisitasController::class, 'store']);
Route::put('/Visitas/{id}', [VisitasController::class, 'update']);
Route::delete('/Visitas/{id}', [VisitasController::class, 'destroy']);

Route::get('/Presentaciones', [PresentacionesController::class, 'index']);
Route::post('/Presentaciones', [PresentacionesController::class, 'store']);
Route::put('/Presentaciones/{id}', [PresentacionesController::class, 'update']);
Route::delete('/Presentaciones/{id}', [PresentacionesController::class, 'destroy']);




