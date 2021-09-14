@extends('blank')

@section('contend')
<div class="row">
    <div class="col-md-6 col-xl-3">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Colección</h4>
                    <div class="">
                        <p class="text-muted text-small"><strong>Código y N° de colección</strong> : {{$muestra->codigo_y_n_de_coleccion}}</p>
                        <p class="text-muted text-small"><strong>Nombre científico</strong> : {{$muestra->nombre_cientifico}}</p>
                        <p class="text-muted text-small"><strong>Nombre completo</strong> : {{$muestra->nombre_completo}}</p>
                        <p class="text-muted text-small"><strong>Nombre común</strong> : {{$muestra->nombre_comun}}</p>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title">Formulario para subir imagen</h4>
                <form id="myform" action="{{ route('coleccion.imagen.upload', [$muestra]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descripción</label>
                    <textarea class="form-control" rows="4" name="descripcion"></textarea>
                </div>
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
</div>

<div class="row">

    @foreach ($muestra->images as $imagen)
        <div class="col-md-3">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('storage/'.$imagen->url) }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"><strong>{{$imagen->nombre}}</strong></p>
                    <p class="card-text">{{$imagen->descripcion}}</p>
                </div>
                <div class="card-footer">
                    <div class="float-left">
                        <form action="{{ route('coleccion.imagen.delete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $imagen->id }}">
                        <button type="submit" class="btn btn-xs  btn-danger">Eliminar</button>
                        </form>
                    </div>
                    <div class="float-right">
                        <a href="{{route('coleccion.imagen.download',[$imagen])}}"><button type="button" class="btn btn-xs btn-primary">Descargar imagen</button></a>
                    </div>
                        
                        
                    </p>
                </div>
            </div>
            
        </div>
    @endforeach

</div>
    
@endsection