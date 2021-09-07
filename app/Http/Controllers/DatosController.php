<?php

namespace App\Http\Controllers;

use App\Models\Muestra;
use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function index()
    {
        $datos = Muestra::all();
        return $datos;
    }
}
