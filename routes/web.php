<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\UsuarioController;
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
    return view('auth.login');
});

Route::resource('almacen/categoria',CategoriaController::class)->parameters(['categoria'=>'id']);
Route::resource('almacen/articulo',ArticuloController::class)->parameters(['articulo'=>'id']);
Route::resource('ventas/cliente',ClienteController::class)->parameters(['cliente'=>'id']);
Route::resource('compras/proveedor',ProveedorController::class)->parameters(['proveedor'=>'id']);
Route::resource('compras/ingreso',IngresoController::class)->parameters(['ingreso'=>'id']);
Route::resource('ventas/venta',VentaController::class)->parameters(['venta'=>'id']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
/*Route::middleware(['auth:sanctum', 'verified'])->get('/auth/login', function () {
    return view('auth/login');
})->name('login');*/

Route::resource('seguridad/usuario',UsuarioController::class)->parameters(['usuario'=>'id']);

//Route::get('/{slug?}', 'HomeController@index');