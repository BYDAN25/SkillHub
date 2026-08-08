<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ReservaApiController;

Route::get('/reservas', [ReservaApiController::class, 'index']);
Route::get('/reservas/{id}', [ReservaApiController::class, 'show']);
Route::post('/reservas', [ReservaApiController::class, 'store']);
Route::put('/reservas/{id}', [ReservaApiController::class, 'update']);
Route::delete('/reservas/{id}', [ReservaApiController::class, 'destroy']);

Route::get('/usuario/{id}/reservas', [ReservaApiController::class, 'reservasUsuario']);
Route::get('/clase/{id}/reservas', [ReservaApiController::class, 'reservasClase']);