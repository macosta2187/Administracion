<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Almacen;


class AlmacenController extends Controller
{

public function IngresarAlmacen(Request $request)
    {
                 
        $almacen = new Almacen();              
        $almacen->nombre = $request->input('nombre');
        $almacen->calle = $request->input('calle');
        $almacen->numero = $request->input('numero');
        $almacen->ciudad = $request->input('ciudad');
        $almacen->latitud = $request->input('latitud');
        $almacen->longitud = $request->input('longitud');        
        $almacen->save();

      }
      

public function editarAlmacen($id)
      {
          $almacen = Almacen::findOrFail($id);  
          return view('EditarAlmacen', compact('almacen'));
      }
  
public function actualizarAlmacen(Request $request, $id)
      {
          $almacen = Almacen::findOrFail($id);  
          $almacen->nombre = $request->input('nombre');
          $almacen->calle = $request->input('calle');
          $almacen->numero = $request->input('numero');
          $almacen->ciudad = $request->input('ciudad');
          $almacen->latitud = $request->input('latitud');
          $almacen->longitud = $request->input('longitud');  
          $almacen->save();
          
          return view('inicio');
      }


public function EliminarAlmacen($id)
    {
        $almacen = Almacen::findOrFail($id);
        $almacen->delete();

        return view('inicio');
    }
    

public function ListarAlmacen()
    {
        $almacenes = Almacen::all();
        return view('ListarAlmacen', compact('almacenes'));
    }
}





