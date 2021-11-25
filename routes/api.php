<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Http\Request;
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

Route::prefix("alumno")->group(function () {
    Route::get('', [AlumnoController::class, 'obtenerTodos']);

    Route::post('', [AlumnoController::class, 'insertarAlumno']);

    Route::get('/{id}', [AlumnoController::class, 'obtenerAlumno']);

    Route::delete('/{id}', [AlumnoController::class, 'borrarAlumno']);

    Route::post('/{id}/editar', [AlumnoController::class, 'modificarAlumno']);

});
