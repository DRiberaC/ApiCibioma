<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Muestra;
use App\Models\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
                return redirect()->back();
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

    public function edit(Muestra $muestra)
    {
        //return $muestra;
        $tipos=Tipo::all();
        switch ($muestra->tipo->id) {
            case 1:
                return view('muestras.edit.editCarpoteca', compact('tipos', 'muestra'));
                break;
            case 2:
                return view('muestras.edit.editEntomologia', compact('tipos', 'muestra'));
                break;
            case 3:
                return view('muestras.edit.editGermoteca', compact('tipos', 'muestra'));
                break;
            case 4:
                return view('muestras.edit.editHerbario', compact('tipos', 'muestra'));
                break;
            case 5:
                return view('muestras.edit.editPalinoteca', compact('tipos', 'muestra'));
                break;
            case 6:
                return view('muestras.edit.editXiloteca', compact('tipos', 'muestra'));
                break;
            default:
                return redirect()->back();
                break;
        }
    }

    public function update(Request $request)
    {
        Muestra::where('id', $request->id)->update($request->except('_token', 'id'));
        return redirect()->route('home.index');
    }

    public function imagen(Muestra $muestra)
    {
        $tipos=Tipo::all();
        return view('muestras.imagenes', compact('tipos', 'muestra'));
    }

    public function uploadImg(Request $request, Muestra $muestra)
    {
        //dd($request->all());
        $request->validate([
            'image' => 'required|image'
        ]);
        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/images');

            $muestra->images()->create([
                'url' => str_replace('public/', '', $path),
                'nombre'=>$name,
                'descripcion' => $request->descripcion,
            ]);
            
            return redirect()->back();
        }
    }

    public function deleteImg(Request $request)
    {
        Image::find($request->id)->delete();
        return redirect()->back();
    }

    public function downloadImg(Image $image)
    {
        //$myFile = URL::to($libro->file->url);
        $myFile = storage_path("app/public/images/".basename($image->url));
        $headers = ['Content-Type: application/pdf'];
        $newName = $image->nombre;
        if (!\File::exists($myFile)) {
            dd("Hubo un error al momento de la descarga.", $myFile);
        }
        return response()->download($myFile, $newName, $headers);
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
                //return view('home', compact('tipos',''));
                break;
        }
        //return view('muestras.muestras', compact('tipos', 'tipo', 'muestras'));
    }
}
