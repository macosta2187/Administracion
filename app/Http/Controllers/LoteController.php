<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lote;

class LoteController extends Controller
{
    public function IngresarLote(Request $request)
    {
                 
        $lote = new Lote();              
        $lote->id = $request->input('lote');  
        $lote->save();

      }
      

public function editarLote($id)
      {
          $lote = Lote::findOrFail($id);  
          return view('EditarLote', compact('lote'));
      }
  
public function actualizarLote(Request $request, $id)
      {
          $lote = Lote::findOrFail($id);  
          $lote->id = $request->input('lote');    
          $lote->save();
          
          return view('inicio');
      }


public function EliminarLote($id)
    {
        $lote = Lote::findOrFail($id);
        $lote->delete();

        return view('inicio');
    }
    

public function ListarLote()
    {
        $lote = Lote::all();
        return view('ListarLote', compact('lote'));
    }
}
