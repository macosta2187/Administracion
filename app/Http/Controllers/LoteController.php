<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lote;
use App\Models\Paquete;
use Illuminate\Support\Facades\DB;

class LoteController extends Controller
{
    /*
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
        $paquete = $request->input('Paquetes');
    
        if ($paquete !== null && is_array($paquete) && isset($paquete['lote']) && isset($paquete['estatus']) && isset($paquete['paqueteId']) && isset($paquete['camionId'])) {
            $lote = new Lote();
            $lote->lote = $paquete['lote'];
            $lote->estatus = $paquete['estatus'];
            $lote->paqueteId = $paquete['paqueteId'];
            $lote->camionId = $paquete['camionId'];
            $lote->save();
    
        
            $paqueteExistente = Paquete::find($paquete['paqueteId']);
    
            if ($paqueteExistente) {
                $paqueteExistente->delete();
            }
    
          
            return redirect()->route('inicio');
        } else {
            return redirect("/");
       
        }
        */


        public function ingresarLote(Request $request)
        {
            $request->validate([
                'lote' => 'required|integer|min:1', // Validación básica para el número de lote
            ]);
    
            // Crear un nuevo lote en la base de datos
            $lote = new Lote();
            $lote->numero = $request->input('lote');
            $lote->save();
    
            // Redirigir a la página de lista de paquetes o donde sea necesario
            return redirect()->route('paquetes/Listar'); // Reemplaza 'listaPaquetes' con el nombre real de tu ruta
        }
        public function asignarLote(Request $request)
        {
            $request->validate([
                'camionId' => 'required|integer', // Asegúrate de validar el camión seleccionado
                'seleccionarPaquete' => 'required|array', // Asegúrate de validar los paquetes seleccionados
            ]);
    
            $camionId = $request->input('camionId');
            $paquetesSeleccionados = $request->input('seleccionarPaquete');
    
            // Aquí debes implementar la lógica para asignar los paquetes al camión y guardar estos cambios en la base de datos
    
            // Redirigir a la página de lista de paquetes o donde sea necesario
            return redirect()->route('paquetes/Listar'); // Reemplaza 'listaPaquetes' con el nombre real de tu ruta
        }
    }
    
   
    
    
    
    

