<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;
use App\Models\Lote;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaqueteController extends Controller
{



    public function Insertar(Request $request){   
      

    $paquete = new Paquete;
    $paquete->calle = $request->input('calle');
    $paquete->numero = $request->input('numero');
    $paquete->localidad = $request->input('localidad');    
    $paquete->departamento = $request->input('departamento'); 
    $paquete->estatus = $request->input('estatus');
    $paquete->tamaño = $request->input('tamaño');
    $paquete->peso = $request->input('peso');
    $paquete->telefono = $request->input('telefono');
    $paquete->fecha = $request->input('fecha');     

    $paquete->save();
  

   
}

public function Listar()
{
    $paquete = Paquete::all();   
    return view('/transito/FormularioRlotes', ['paquetes' => Paquete::all()]);
}

}