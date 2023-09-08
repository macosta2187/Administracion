<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function Insertar(Request $request)
    {

        $producto = new Producto;
        $producto->descripcion = $request->input('descripcion');
        $producto->calle = $request->input('calle');
        $producto->numero = $request->input('numero');
        $producto->ciudad = $request->input('ciudad');
        $producto->estado = $request->input('estado');        
        $producto->id_lote = $request->input('id_lote');
        $producto->save();
    }

    public function Listar()
    {

        $producto = Producto::all();

        return view('productos.Listar', ['productos' => $productos]);
    }

    public function Eliminar(Producto $producto)
    {

        $producto->delete();
        return redirect("/");

    }

    public function Editar(Producto $producto)
    {
        return view('productos.Editar', compact('productos'));
    }

    public function Actualizar(Producto $request, Producto $producto)
    {

        $producto = new Producto;
        $producto->descripcion = $request->input('descripcion');
        $producto->calle = $request->input('calle');
        $producto->numero = $request->input('numero');
        $producto->ciudad = $request->input('ciudad');
        $producto->estado = $request->input('estado');        
        $producto->id_lote = $request->input('id_lote');
        $producto->save();

        return redirect("/");
    }

    

}
