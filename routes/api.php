<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\CopiaController;
use App\Http\Controllers\LibroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('bibliotecas', BibliotecaController::class);
Route::apiResource('autores', AutorController::class);
Route::apiResource('libros', LibroController::class);
Route::apiResource('copias', CopiaController::class);
