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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dataMatches', [\App\Http\Controllers\GetDataMatches::class, 'index']);
Route::get('/dataMap', [\App\Http\Controllers\GetDataMap::class, 'index']);
Route::get('/dataPartidos', [\App\Http\Controllers\Partidos::class, 'index']);
Route::get('/MapController', [\App\Http\Controllers\MapController::class, 'index']);
Route::get('/jugadores', [\App\Http\Controllers\JugadoresController::class, 'index']);
Route::get('/Barras', [\App\Http\Controllers\BarrasController::class, 'index']);
Route::get('/storageImage', function () {

    $request = Request();
    $ruta = storageImage($request->image, '');
    return $ruta;
});


function storageImage($imagenBase64, $path=null) {

    if($imagenBase64!=null&&$imagenBase64!='no'){

        $imageName = uniqid().'.jpg';
        $image  = base64_decode($imagenBase64);
        $path =  '/imagenes/'.($path ? $path . '/' : '');
        \Illuminate\Support\Facades\Storage::disk('local')->put( '/public'.$path.$imageName,$image );
        $url = '/storage'.$path.$imageName;
        return $url;

    }

    return null;
}


require __DIR__.'/auth.php';
