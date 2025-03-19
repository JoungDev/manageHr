<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\rolController;
use App\Http\Controllers\Api\epsController;
use App\Http\Controllers\Api\nacionalidadController;
use App\Http\Controllers\Api\generoController;
use App\Http\Controllers\tipoPermisoController;

Route::get('/rols', [rolController::class, 'index']);
Route::post('/rols',[rolController::class, 'store']);
Route::put('/rols/{id}',[rolController::class, 'update']);
Route::get('/rols/{id}',[rolController::class, 'show']);
Route::patch('/rols/{id}',[rolController::class, 'updatePartial']);
Route::delete('/rols/{id}',[rolController::class,'destroy'] );

Route::get('/epss', [epsController::class, 'index']);
Route::post('/epss',[epsController::class, 'store']);
Route::put('/epss/{id}',[epsController::class, 'update']);
Route::get('/epss/{id}',[epsController::class, 'show']);
Route::patch('/epss/{id}',[epsController::class, 'updatePartial']);
Route::delete('/epss/{id}',[epsController::class,'destroy'] );

Route::get('/nacionalidad', [nacionalidadController::class, 'index']);
Route::post('/nacionalidad',[nacionalidadController::class, 'store']);
Route::put('/nacionalidad/{id}',[nacionalidadController::class, 'update']);
Route::get('/nacionalidad/{id}',[nacionalidadController::class, 'show']);
Route::patch('/nacionalidad/{id}',[nacionalidadController::class, 'updatePartial']);
Route::delete('/nacionalidad/{id}',[nacionalidadController::class,'destroy'] );

Route::get('/genero', [generoController::class, 'index']);
Route::post('/genero',[generoController::class, 'store']);
Route::put('/genero/{id}',[generoController::class, 'update']);
Route::get('/genero/{id}',[generoController::class, 'show']);
Route::patch('/genero/{id}',[generoController::class, 'updatePartial']);
Route::delete('/genero/{id}',[generoController::class,'destroy'] );

Route::get('/tipopermiso', [tipoPermisoController::class, 'index']);
Route::post('/tipopermiso',[tipoPermisoController::class, 'store']);
Route::put('/tipopermiso/{id}',[tipoPermisoController::class, 'update']);
Route::get('/tipopermiso/{id}',[tipoPermisoController::class, 'show']);
Route::patch('/tipopermiso/{id}',[tipoPermisoController::class, 'updatePartial']);
Route::delete('/tipopermiso/{id}',[tipoPermisoController::class,'destroy'] );