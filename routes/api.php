<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\UsuarioController;

//Route::apiResource('personajes',PersonajeController::class);
Route::get('/personajes/all',[PersonajeController::class,'index']);
Route::get('/personajes/show/{personaje}',[PersonajeController::class,'show']);
Route::post('/personajes/store',[PersonajeController::class,'store']);
Route::put('/personajes/update/{personaje}',[PersonajeController::class,'update']);
Route::delete('/personajes/destroy/{personaje}',[PersonajeController::class,'destroy']);


//Route::apiResource('usuarios',UsuarioController::class);
Route::get('/usuarios/all',[UsuarioController::class,'index']);
Route::get('/usuarios/show/{usuario}',[UsuarioController::class,'show']);
Route::post('/usuarios/store',[UsuarioController::class,'store']);
Route::put('/usuarios/update/{usuario}',[UsuarioController::class,'update']);
Route::delete('/usuarios/destroy/{usuario}',[UsuarioController::class,'destroy']);
