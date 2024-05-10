<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\saludoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', [saludoController::class, "saludito"]);

Route::resource("/cursos", CursoController::class);

Route::resource("/estudiantes", EstudianteController::class);


