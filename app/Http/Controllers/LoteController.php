<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lote;
use App\Models\Paquete;
use Illuminate\Support\Facades\DB;

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


    public function asignarLote(Request $request)
    {
       
        $calleSeleccionado = $request->input('calle'); 
        $loteSeleccionado = $request->input('lote');  
        $departamentoSeleccionado = $request->input('departamento');  
        $numeroSeleccionado = $request->input('numero');  
        $fechaSeleccionado = $request->input('fecha');  
        $telefonoSeleccionado = $request->input('telefono');  
        $tamañoSeleccionado = $request->input('tamaño');  
        $pesoSeleccionado = $request->input('peso');  
        $estatusSeleccionado = $request->input('estatus');  
        $paquetesSeleccionados = $request->input('seleccionar');
        $localidadSeleccionado = $request->input('localidad');
    
       
        foreach ($paquetesSeleccionados as $paqueteId) {          
            DB::table('conformans')->insert([
                'lote_id' => $loteSeleccionado, 
                'paquete_id' => $paqueteId,
                'calle_conforman' => $calleSeleccionado,                              
                'departamento_conforman' => $departamentoSeleccionado,
                'localidad_conforman' => $localidadSeleccionado,
                'numero_conforman' =>$numeroSeleccionado,
                'fecha_conforman' =>$fechaSeleccionado, 
                'telefono_conforman' =>$telefonoSeleccionado,
                'tamaño_conforman' =>$tamañoSeleccionado,
                'peso_conforman' =>$pesoSeleccionado, 
                'estatus_conforman' =>$estatusSeleccionado,
                


                
            ]);
        }

   
        Paquete::whereIn('id', $paquetesSeleccionados)->delete();
        return redirect()->back()->with('OK', 'Lote asignado con éxito.');
    }
    
   
    
    
    
    
}
