<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exer1', [ListaController::class, 'mostrarExer1']);
Route::post('/respostaexer1', [ListaController::class, 'calcularExer1']);

Route::get('/exer2', [ListaController::class, 'mostrarExer2']);
Route::post('/respostaexer2', [ListaController::class, 'calcularExer2']);