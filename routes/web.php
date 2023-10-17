<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('categorias','App\Http\Controllers\CategoriaController');
Route::resource('productos','App\Http\Controllers\ProductoController');
//Route::resource('ventas','App\Http\Controllers\VentaController');
Route::get('/ventas',[App\Http\Controllers\VentaController::class,'index'])->name('ventas.index');
Route::get('/ventas/create',[App\Http\Controllers\VentaController::class,'create'])->name('ventas.create');
Route::post('/ventas',[App\Http\Controllers\VentaController::class,'store'])->name('ventas.store');
Route::get('/ventas/show/{id}',[App\Http\Controllers\VentaController::class,'show'])->name('ventas.show');
Route::post('/ventas/anular/{id}',[App\Http\Controllers\VentaController::class,'anular'])->name('ventas.anular');


Route::get('/buscar-productos', [App\Http\Controllers\VentaController::class,'buscarProductos']);
Route::get('/obtener-detalles-producto',[App\Http\Controllers\VentaController::class,'obtenerDetallesProducto']);
