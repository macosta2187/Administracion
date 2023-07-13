<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function IngresarProducto(Request $request)
    {
                 
        $produto = new Producto();              
        $produto->descripcion = $request->input('descripcion');
        $produto->calle = $request->input('calle');
        $produto->numero = $request->input('numero');
        $produto->ciudad = $request->input('ciudad');
        $produto->estado = $request->input('estado');
        $produto->id_lote = $request->input('id_lote');        
        $produto->save();

      }
      

public function editarProducto($id)
      {
          $producto = Producto::findOrFail($id);  
          return view('EditarProducto', compact('producto'));
      }
  
public function actualizarProducto(Request $request, $id)
      {
          $producto = Producto::findOrFail($id);  
          $producto->descripcion = $request->input('descripcion');
          $producto->calle = $request->input('calle');
          $producto->numero = $request->input('numero');
          $producto->ciudad = $request->input('ciudad');
          $producto->estado = $request->input('estado');
          $producto->id_lote = $request->input('id_lote');  
          $producto->save();
          
          return view('inicio');
      }


public function EliminarProducto($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return view('inicio');
    }
    

public function ListarProducto()
    {
        $productos = Producto::all();
        return view('ListarProducto', compact('productos'));
    }
}
