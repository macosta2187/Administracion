<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;


class Lote extends Model
{
    use HasFactory;
    protected $table = 'conformans';
    use SoftDeletes;
    use HasFactory;

    public function paquetes()
    {
        return $this->belongsToMany(Paquete::class);
    }



}
