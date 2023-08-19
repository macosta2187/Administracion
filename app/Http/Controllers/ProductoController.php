<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;


class ProductoController extends Controller
{
    
    public function Insertar(Request $request)
    {

        $producto = new Producto;
        $producto->descripcion = $request->input('descripcion');
        $producto->calle = $request->input('calle');
        $producto->numero = $request->input('numero');
        $producto->ciudad = $request->input('ciudad');
        $producto->id_lote = $request->input('id_lote');      
        $producto->save();
}


 


}
