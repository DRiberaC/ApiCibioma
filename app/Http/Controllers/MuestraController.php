<?php

namespace App\Http\Controllers;

use App\Models\Muestra;
use Illuminate\Http\Request;
use App\Http\Resources\MuestraResource;

class MuestraController extends Controller
{
    public function index()
    {
        $datos = Muestra::filter()->get();
        return $datos;
    }

    public function show($muestra)
    {
        //$datos = Muestra::with(['tipo'])->where('codigo_y_n_de_coleccion', $muestra)->first();
        $datos = Muestra::where('codigo_y_n_de_coleccion', $muestra)->first();
        return new MuestraResource($datos);
    }
}
