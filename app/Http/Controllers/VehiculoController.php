<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;


class VehiculoController extends Controller
{
    public function Insertar(Request $request)
    {

        $vehiculo = new Vehiculo;
        $vehiculo->matricula = $request->input('matricula');
        $vehiculo->marca = $request->input('marca');
        $vehiculo->modelo = $request->input('modelo');
        $vehiculo->tipo = $request->input('tipo');
        $vehiculo->capacidad_peso = $request->input('capacidad_peso');
        $vehiculo->ruta = $request->input('ruta');        
        $vehiculo->id_chofer = $request->input('id_chofer');
        $vehiculo->save();
    }


    public function Eliminar($id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();
       
    }


    public function Listar()
    {

        $vehiculo = Vehiculo::all();

        return view('vehiculos.Listar', ['vehiculos' => $vehiculo]);
    }

    public function Editar(Vehiculo $vehiculo)
    {
        return view('vehiculos.Editar', compact('vehiculo'));
    }

    public function Actualizar(Request $request, Vehiculo $vehiculo)
    {
        $vehiculo = new Vehiculo;
        $vehiculo->matricula = $request->input('matricula');
        $vehiculo->marca = $request->input('marca');
        $vehiculo->modelo = $request->input('modelo');
        $vehiculo->tipo = $request->input('tipo');
        $vehiculo->capacidad_peso = $request->input('capacidad_peso');
        $vehiculo->ruta = $request->input('ruta');        
        $vehiculo->id_chofer = $request->input('id_chofer');
        $vehiculo->save();

        return redirect("/");
    }
}
