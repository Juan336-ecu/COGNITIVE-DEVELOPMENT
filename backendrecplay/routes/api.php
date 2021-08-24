<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CategoriaController;
//use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PuntajeController;
use App\Http\Controllers\TerapeutaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('categoria', CategoriaController::class);
//Route::apiResource("categoria","CategoriaController");
//Route::apiResource("juego","JuegoController");
Route::apiResource('juego', JuegoController::class);
//Route::apiResource("paciente","PacienteController");
Route::apiResource('paciente', PacienteController::class);
//Route::apiResource("puntaje","PuntajeController");
Route::apiResource('puntaje', PuntajeController::class);
//Route::apiResource("terapeuta","TerapeutaController");
Route::apiResource('terapeuta', TerapeutaController::class);
