<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AlmacenController;

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
    return view('ventas.index');
});


Route::resource('ventas', VentasController::class);
Route::resource('productos', ProductoController::class);
Route::resource('almacen', AlmacenController::class);