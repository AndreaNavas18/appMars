<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('modules.tenderos.index');
});

Route::get('/offline', function(){
    return view('vendor.laravelpwa.offline');
});
//Rutas tenderos
Route::name('tenderos.')->group(function() {
    // Ingreso tenderos
    Route::post('/tenderos/ingreso', [TenderoController::class, 'ingreso'])->name('ingreso');

});