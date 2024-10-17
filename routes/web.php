<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cliente;
use App\Http\Controllers\TesteController;


Route::get('cadastrarCliente', [Cliente::class,'create']);
Route::post('cadastrarCliente', [Cliente::class,'store']);
Route::get('listarCliente', [Cliente::class, 'index']);
Route::delete('deletarCliente/{id}', [Cliente::class, 'destroy']);


/* Route::get('/', [TesteController::class,'home']);

Route::get('/faleconosco', [TesteController::class,'faleconosco']);

Route::get('/galeria', [TesteController::class,'galeria']); */