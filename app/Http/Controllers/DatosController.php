<?php

namespace App\Http\Controllers;

use App\Models\Muestra;
use App\Models\Tipo;
use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function index()
    {
        $tipos=Tipo::all();
        $muestras=Muestra::all();
        //return $muestras;
        //dd($muestras);
        return view('home', compact('tipos', 'muestras'));
    }

    public function create(Tipo $tipo)
    {
        $tipos=Tipo::all();
        switch ($tipo->id) {
            case 1:
                return view('muestras.create.createCarpoteca', compact('tipos', 'tipo'));
                break;
            case 2:
                return view('muestras.create.createEntomologia', compact('tipos', 'tipo'));
                break;
            case 3:
                return view('muestras.create.createGermoteca', compact('tipos', 'tipo'));
                break;
            case 4:
                return view('muestras.create.createHerbario', compact('tipos', 'tipo'));
                break;
            case 5:
                return view('muestras.create.createPalinoteca', compact('tipos', 'tipo'));
                break;
            case 6:
                return view('muestras.create.createXiloteca', compact('tipos', 'tipo'));
                break;
            default:
                return view('home', compact('tipos'));
                break;
        }
        //return view('muestras.create', compact('tipos', 'tipo'));
    }

    public function store(Request $request)
    {
        //$values = array_except($request->all(), ['_token']);
        $muestra=Muestra::create($request->except('_token'));
        return redirect()->route('coleccion.tipo', [$muestra->tipo->slug]);
    }

    public function coleccion(Tipo $tipo)
    {
        $tipos=Tipo::all();
        $muestras=Muestra::where('tipo_id', $tipo->id)->get();
        //dd($muestras);
        switch ($tipo->id) {
            case 1:
                return view('muestras.muestrasCarpoteca', compact('tipos', 'tipo', 'muestras'));
                break;
            case 2:
                return view('muestras.muestrasEntomologia', compact('tipos', 'tipo', 'muestras'));
                break;
            case 3:
                return view('muestras.muestrasGermoteca', compact('tipos', 'tipo', 'muestras'));
                break;
            case 4:
                return view('muestras.muestrasHerbario', compact('tipos', 'tipo', 'muestras'));
                break;
            case 5:
                return view('muestras.muestrasPalinoteca', compact('tipos', 'tipo', 'muestras'));
                break;
            case 6:
                return view('muestras.muestrasXiloteca', compact('tipos', 'tipo', 'muestras'));
                break;
            default:
                return view('home', compact('tipos'));
                break;
        }
        //return view('muestras.muestras', compact('tipos', 'tipo', 'muestras'));
    }
}
