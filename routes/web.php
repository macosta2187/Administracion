<?php

use Illuminate\Support\Facades\Route;
use App\Models\Almacen;
use App\Models\Producto;
use App\Models\Lote;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LoteController;
use App\Http\Controllers\VerifyLogin;
use App\Http\Middleware;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Middleware\Autenticacion;
use Illuminate\Http\Request;





Route::get('/', function () {  
    return view('login');
})->name('login');





/*

/*
Route::get("/ListarAlmacen",[AlmacenController::class,"ListarAlmacen"])->middleware(Autenticacion::class);
//Route::get('/EliminarAlmacen/{id}',[AlmacenController::class,"EliminarAlmacen"])->name('almacen.eliminar');
Route::get('/EditarAlmacen/{id}/editar', [AlmacenController::class, 'editarAlmacen'])->name('almacenes.editar');
Route::post('/almacenes/{id}/actualizar', [AlmacenController::class, 'actualizarAlmacen'])->name('almacenes.actualizar');

*/



Route::get('/almacenes/Listar',[AlmacenController::class,"Listar"]);
Route::post('/almacenes/IngresarAlmacen"',[AlmacenController::class,"Insertar"])->name('almacenes.Insertar');
Route::get('/almacenes/{almacen}/editar', [AlmacenController::class,"Editar"])->name('almacenes.Editar');
Route::put('/almacenes/{almacen}', [AlmacenController::class,"Actualizar"])->name('almacenes.Actualizar');
Route::delete('/almacenes/{almacen}', [AlmacenController::class,"Eliminar"])->name('almacenes.eliminar');






Route::get("/almacenes/IngresarAlmacen",function () {
    return view('/almacenes/IngresarAlmacen');
});

Route::get("/almacenes/Eliminar",function () {
    return view('/almacenes/Eliminar');
});

Route::get("/almacenes/Editar",function () {
    return view('/almacenes/Editar');
});








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



  
    Route::post("/IngresarLote",[LoteController::class,"IngresarLote"])->middleware(Autenticacion::class);
    /****************************************************** */
    Route::get("/ListarLote",[LoteController::class,"ListarLote"]);
    Route::get('/EliminarLote/{id}',[LoteController::class,"EliminarLote"])->name('lote.eliminar');
    Route::get('/EditarLote/{id}/editar', [LoteController::class, 'editarLote'])->name('lote.editar');
    Route::post('/lote/{id}/actualizar', [LoteController::class, 'actualizarLote'])->name('lote.actualizar');



    Route::get("/IngresarLote",function () {
        return view('IngresarLote');
    });

Route::get("/IngresarLote",function () {
    return view('IngresarLote');
});

Route::get('/Registro', function () {
    return view('Registro');
});


Route::get('/error', function () {
    return view('error');
});

Route::post("/registrar",[UserController::class,"Registro"]);

Route::get('/inicio', function () {
    return view('inicio');
});



