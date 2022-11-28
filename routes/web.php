<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
Route::get('/', [AlumnoController::class,'index']);
Route::get('/alumno/{nombre}', [AlumnoController::class,'miweb']);

Route::get('/profesores', [AlumnoController::class,'profes']);

Route::get('/crearalumno', [AlumnoController::class,'crearAlumno']);


Route::post('/recibiralumno', [AlumnoController::class,'recibirAlumno']);
