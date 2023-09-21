<?php

namespace App\Http\Controllers;

use App\Models\Camiones;
use App\Models\Paquete;
use Illuminate\Http\Request;

class CamionesController extends Controller
{
    public function Insertar(Request $request)
    {
        $camiones = new Camiones;
        $camiones->matricula = $request->input('matricula');
        $camiones->marca = $request->input('marca');
        $camiones->modelo = $request->input('modelo');
        $camiones->tipo = $request->input('tipo');
        $camiones->capacidad_peso = $request->input('capacidad_peso');
        $camiones->save();

      
    }

 

    public function Eliminar(Request $request, $id)
    {
        $camiones = Camiones::find($id);

        if ($camiones) {
            $camiones->delete();
          
            return redirect()->route('/'); 
        }

        return redirect()->route('/');
    }

    public function Editar(Camiones $camiones)
    {
        return view('camiones.Editar', compact('camiones'));
    }

    public function Actualizar(Request $request, $id)
    {
        $camiones = Camiones::find($id);

        if ($camiones) {
            $camiones->matricula = $request->input('matricula');
            $camiones->marca = $request->input('marca');
            $camiones->modelo = $request->input('modelo');
            $camiones->tipo = $request->input('tipo');
            $camiones->capacidad_peso = $request->input('capacidad_peso');
            $camiones->save();

        
            return redirect()->route('/');
        }

        return redirect()->route('/'); 
    }
}
