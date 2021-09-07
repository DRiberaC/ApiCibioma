<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muestra extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'codigo_y_n_de_coleccion';
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }
    //protected $guarded = ['id'];
}
