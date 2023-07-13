<?php

use Illuminate\Support\Facades\Route;
use App\Models\Almacen;
use App\Models\Producto;
use App\Models\Lote;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LoteController;

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
    return view('inicio');
});

/****************************************************** */
Route::get("/IngresarAlmacen",function () {
    return view('IngresarAlmacen');
});
Route::post("/IngresarAlmacen",[AlmacenController::class,"IngresarAlmacen"]);
/****************************************************** */
Route::get("/ListarAlmacen",[AlmacenController::class,"ListarAlmacen"]);
Route::get('/EliminarAlmacen/{id}',[AlmacenController::class,"EliminarAlmacen"])->name('almacen.eliminar');
Route::get('/EditarAlmacen/{id}/editar', [AlmacenController::class, 'editarAlmacen'])->name('almacenes.editar');
Route::post('/almacenes/{id}/actualizar', [AlmacenController::class, 'actualizarAlmacen'])->name('almacenes.actualizar');

/****************************************************** */
Route::get("/IngresarProducto",function () {
    return view('IngresarProducto');
});
Route::post("/IngresarProducto",[ProductoController::class,"IngresarProducto"]);
/****************************************************** */
Route::get("/ListarProducto",[ProductoController::class,"ListarProducto"]);
Route::get('/EliminarProducto/{id}',[ProductoController::class,"EliminarProducto"])->name('producto.eliminar');
Route::get('/EditarProducto/{id}/editar', [ProductoController::class, 'editarProducto'])->name('producto.editar');
Route::post('/producto/{id}/actualizar', [ProductoController::class, 'actualizarProducto'])->name('producto.actualizar');

/****************************************************** */
Route::get("/IngresarLote",function () {
    return view('IngresarLote');
});
Route::post("/IngresarLote",[LoteController::class,"IngresarLote"]);
/****************************************************** */
Route::get("/ListarLote",[LoteController::class,"ListarLote"]);
Route::get('/EliminarLote/{id}',[LoteController::class,"EliminarLote"])->name('lote.eliminar');
Route::get('/EditarLote/{id}/editar', [LoteController::class, 'editarLote'])->name('lote.editar');
Route::post('/lote/{id}/actualizar', [LoteController::class, 'actualizarLote'])->name('lote.actualizar');