<?php

use App\Http\Controllers\EspecializacionesController;
use App\Http\Controllers\VeterinariaController;
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

Route::get('/veterinaria', [VeterinariaController::class, 'index']);
Route::post('/veterinaria', [VeterinariaController::class, 'store']);
Route::put('/veterinaria/{id}', [VeterinariaController::class, 'update']);
Route::delete('/veterinaria/{id}', [VeterinariaController::class, 'destroy']);

Route::get('/especializaciones', [EspecializacionesController::class, 'index']);
Route::post('/especializaciones', [EspecializacionesController::class, 'store']);
Route::put('/especializaciones/{id}', [EspecializacionesController::class, 'update']);
Route::delete('/especializaciones/{id}', [EspecializacionesController::class, 'destroy']);

