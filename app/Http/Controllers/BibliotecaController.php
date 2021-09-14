<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Biblioteca;
use App\Models\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class BibliotecaController extends Controller
{
    public function index()
    {
        $tipos=Tipo::all();

        $libros=Biblioteca::all();
        return view('biblioteca.index', compact('tipos', 'libros'));
    }

    public function create()
    {
        $tipos=Tipo::all();
        return view('biblioteca.create', compact('tipos'));
    }
    public function store(Request $request)
    {
        Biblioteca::create($request->except('_token'));
        return redirect()->route('biblioteca.index');
    }
    public function edit(Biblioteca $libro)
    {
        $tipos=Tipo::all();
        return view('biblioteca.edit', compact('tipos', 'libro'));
    }
    public function update(Request $request)
    {
        Biblioteca::where('id', $request->id)->update($request->except('_token', 'id'));
        return redirect()->route('biblioteca.index');
    }
    public function archivo(Biblioteca $libro)
    {
        //dd($libro->images);
        $tipos=Tipo::all();
        return view('biblioteca.archivo', compact('tipos', 'libro'));
    }
    public function uploadImg(Request $request, Biblioteca $libro)
    {
        //dd($request->all());
        $request->validate([
            'image' => 'required|image'
        ]);
        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/images');

            $libro->image()->create([
                'url' => str_replace('public/', '', $path),
                'nombre'=>$name,
                'descripcion' => $request->descripcion,
            ]);
            
            return redirect()->back();
        }
    }

    public function uoloadFile(Request $request, Biblioteca $libro)
    {
        if ($request->hasFile('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->store('public/files');

            $libro->file()->create([
                'url' => str_replace('public/', '', $path),
                'nombre'=>$name,
            ]);
            
            return redirect()->back();
        }
    }

    public function deleteFile(Request $request)
    {
        Archivo::find($request->id)->delete();
        return redirect()->back();
    }
    public function downloadFile(Biblioteca $libro)
    {
        //$myFile = URL::to($libro->file->url);
        $myFile = storage_path("app\\public\\files\\".basename($libro->file->url));
        $headers = ['Content-Type: application/pdf'];
        $newName = $libro->file->nombre;
        if (!\File::exists($myFile)) {
            dd("Hubo un error al momento de la descarga.");
        }
        return response()->download($myFile, $newName, $headers);
    }
}
