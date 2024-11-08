<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/products', [ProductController::class, 'getAll']); // Consultar todos
Route::get('/products/{id}', [ProductController::class, 'getById']); // Consulta por id
Route::post('/products', [ProductController::class, 'create']); // Creación
Route::put('/products/{id}', [ProductController::class, 'update']); // Edición
Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Eliminación