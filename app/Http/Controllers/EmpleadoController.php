<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empleado;
use Illuminate\Support\Facades\DB;



class EmpleadoController extends Controller

{

    public function Insertar(Request $request)
    {

        $empleado = new Empleado;
        $empleado->ci = $request->input('ci');
        $empleado->nombre = $request->input('nombre');
        $empleado->apellido = $request->input('apellido');
        $empleado->celular = $request->input('celular');
        $empleado->email = $request->input('email');
        $empleado->fechanac = $request->input('fechanac');
        $empleado->rol = $request->input('rol');
        $empleado->save();
}

    
}
