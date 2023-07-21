<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Almacen;


class AlmacenController extends Controller
{



public function ListarAlmacen()
    {
      
        return view('ListarAlmacen');
    }
   
}





