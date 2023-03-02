<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return redirect("/analysis");
});
//Route::get('/dataMatches', [\App\Http\Controllers\GetDataMatches::class, 'index']);
//Route::get('/dataMap', [\App\Http\Controllers\GetDataMap::class, 'index']);
//Route::get('/dataPartidos', [\App\Http\Controllers\Partidos::class, 'index']);
//Route::get('/MapController', [\App\Http\Controllers\MapController::class, 'index']);
//Route::get('/jugadores', [\App\Http\Controllers\JugadoresController::class, 'index']);
//Route::get('/Barras', [\App\Http\Controllers\BarrasController::class, 'index']);




Route::get('/dataMatches', [\App\Http\Controllers\GetDataMatches::class, 'index']);
Route::get('/dataMap', [\App\Http\Controllers\GetDataMap::class, 'index']);
Route::get('/dataPartidos', [\App\Http\Controllers\Partidos::class, 'index']);
Route::get('/MapController', [\App\Http\Controllers\MapController::class, 'index']);
Route::get('/jugadores', [\App\Http\Controllers\JugadoresController::class, 'index']);
Route::get('/Barras', [\App\Http\Controllers\BarrasController::class, 'index']);


