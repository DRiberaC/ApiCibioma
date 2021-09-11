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
    <div class="col-md-6">
        <div class="card mb-4">
            <img class="card-img-top" src="{{ asset('shimba/assets/images/bg/bg-3.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-4">
            <img class="card-img-top" src="{{ asset('shimba/assets/images/bg/bg-3.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>
    
@endsection