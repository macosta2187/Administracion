<?php

use Illuminate\Support\Facades\Route;
use App\Models\Almacen;
use App\Models\Producto;
use App\Models\Lote;
use App\Models\Empleado;
use App\Models\Vehiculos;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\EmpleadoController;
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





Route::get('/almacenes/Listar',[AlmacenController::class,"Listar"]);
Route::post('/almacenes/Ingresar"',[AlmacenController::class,"Insertar"])->name('almacenes.Insertar');
Route::get('/almacenes/{almacen}/editar', [AlmacenController::class,"Editar"])->name('almacenes.Editar');
Route::put('/almacenes/{almacen}', [AlmacenController::class,"Actualizar"])->name('almacenes.Actualizar');
Route::delete('/almacenes/{almacen}', [AlmacenController::class,"Eliminar"])->name('almacenes.eliminar');


Route::get("/almacenes/Ingresar",function () {
    return view('/almacenes/Ingresar');
});

Route::get("/almacenes/Eliminar",function () {
    return view('/almacenes/Eliminar');
});

Route::get("/almacenes/Editar",function () {
    return view('/almacenes/Editar');
});



Route::get('/empleados/Listar',[EmpleadoController::class,"Listar"])->name('empleados.Listar');
Route::post('/empleados/Ingresar',[EmpleadoController::class,"Insertar"])->name('empleados.Insertar');
Route::get('/empleados/{empleado}/editar', [EmpleadoController::class,"Editar"])->name('empleados.Editar');
Route::put('/empleados/{empleado}', [EmpleadoController::class,"Actualizar"])->name('empleados.Actualizar');
Route::delete('/empleados/{empleado}', [EmpleadoController::class,"Eliminar"])->name('empleados.eliminar');





Route::get("/empleados/Ingresar",function () {
    return view('/empleados/Ingresar');
});

Route::get("/empleados/Eliminar",function () {
    return view('/empleados/Eliminar');
});

Route::get("/empleados/Editar",function () {
    return view('/empleados/Editar');
});

Route::get("/empleados/Actualizar",function () {
    return view('/empleados/Actualizar');
});




Route::get('/vehiculos/Listar',[VehiculoController::class,"Listar"])->name('vehiculos.Listar');
Route::post('/vehiculos/Ingresar',[VehiculoController::class,"Insertar"])->name('vehiculos.Insertar');
Route::get('/vehiculos/{vehiculo}/editar', [VehiculoController::class,"Editar"])->name('vehiculos.Editar');
Route::put('/vehiculos/{vehiculo}', [VehiculoController::class,"Actualizar"])->name('vehiculos.Actualizar');
Route::delete('/vehiculos/{vehiculo}', [VehiculoController::class,"Eliminar"])->name('vehiculos.eliminar');

Route::get("/vehiculos/Ingresar",function () {
    return view('/vehiculos/Ingresar');
});

Route::delete("/vehiculos/Eliminar",function () {
    return view('/vehiculos/Eliminar');
});

Route::get("/vehiculos/Editar",function () {
    return view('/vehiculos/Editar');
});

Route::get("/vehiculos/Actualizar",function () {
    return view('/vehiculos/Actualizar');
});




Route::get('/productos/Listar',[ProductoController::class,"Listar"]);
Route::post('/productos/Ingresar"',[ProductoController::class,"Insertar"])->name('productos.Insertar');
Route::get('/productos/{producto}/editar', [ProductoController::class,"Editar"])->name('productos.Editar');
Route::put('/productos/{producto}', [ProductoController::class,"Actualizar"])->name('productos.Actualizar');
Route::delete('/productos/{producto}', [ProductoController::class,"Eliminar"])->name('productos.eliminar');



Route::get("/productos/Ingresar",function () {
    return view('/productos/Ingresar');
});

Route::get("/productos/Eliminar",function () {
    return view('/productos/Eliminar');
});

Route::get("/productos/Editar",function () {
    return view('/productos/Editar');
});





  
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



