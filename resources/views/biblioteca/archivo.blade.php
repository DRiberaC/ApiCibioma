@extends('blank')

@section('contend')
<div class="row">
    <div class="col-md-6 col-xl-3">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Colección</h4>
                    <div class="">
                        <p class="text-muted text-small"><strong>Numero de inventario</strong> : {{$libro->n_inventario}}</p>
                        <p class="text-muted text-small"><strong>Titulo</strong> : {{$libro->titulo}}</p>
                        <p class="text-muted text-small"><strong>Autor</strong> : {{$libro->autor}}</p>
                        <p class="text-muted text-small"><strong>Año</strong> : {{$libro->anho}}</p>
                    </div>
                </div>
            </div>
    </div>

    
        
    @empty($libro->image)

        <div class="col-md-6 col-xl-3">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Formulario para subir imagen</h4>
                    <form id="myform" action="{{route('biblioteca.imagen.upload',[$libro])}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                    <div class="input-group cust-file-button">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" required>
                            <label class="custom-file-label">Imagen</label>
                        </div>
                        <div class="input-group-append">
                            <button type="submit" class="btn  btn-primary" type="button">Subir Imagen</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        
    @endempty

    @empty($libro->file)

    <div class="col-md-6 col-xl-3">
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title">Formulario para subir archivo</h4>
                <form id="myform" action="{{route('biblioteca.file.upload',[$libro])}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                <div class="input-group cust-file-button">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file" required>
                        <label class="custom-file-label">Archivo</label>
                    </div>
                    <div class="input-group-append">
                        <button type="submit" class="btn  btn-primary" type="button">Subir Archivo</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    
    @endempty

    @empty(!$libro->file)

    <div class="col-md-6 col-xl-3">
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title">archivo</h4>
                <div class="card mb-2">
                    <div class="p-2">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="ui-w-50">
                                    <span class="avatar-title rounded">
                                        .ZIP
                                    </span>
                                </div>
                            </div>
                            <div class="col pl-0">
                                <a href="{{route('biblioteca.file.download',[$libro])}}" class="text-muted font-weight-bold">{{$libro->file->nombre}}</a>
                                <p class="mb-0">152.36 MB</p>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="btn btn-link btn-lg text-muted">
                                    <i class="dripicons-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('biblioteca.file.delete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $libro->file->id }}">
                            <button type="submit" class="btn btn-xs  btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endempty

</div>

<div class="row">

    @empty(!$libro->image)
        <div class="col-md-3">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('storage/'.$libro->image->url) }}" alt="Card image cap">
                {{-- <div class="card-body">
                    <p class="card-text"><strong>{{$imagen->nombre}}</strong></p>
                    <p class="card-text">{{$imagen->descripcion}}</p>
                </div> --}}
                <div class="card-footer">
                    <form action="{{ route('coleccion.imagen.delete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $libro->image->id }}">
                        <button type="submit" class="btn btn-xs  btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    @endempty

</div>
    
@endsection