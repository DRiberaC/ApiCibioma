@extends('blank')

@section('contend')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Registrar colección de </h5>
                </div>

                <form action="{{ route('biblioteca.update') }}" method="POST">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                @csrf
                                    <input type="hidden" name="id" value="{{$libro->id}}">
                                <div class="form-group">
                                    <label>Numero de inventario</label>
                                    <input type="text" class="form-control" placeholder="Numero de inventario" name="n_inventario" value="{{$libro->n_inventario}}">
                                </div>
                                <div class="form-group">
                                    <label>Titulo</label>
                                    <input type="text" class="form-control" placeholder="Titulo" name="titulo" value="{{$libro->titulo}}">
                                </div>
                                <div class="form-group">
                                    <label>Autor</label>
                                    <input type="text" class="form-control" placeholder="Autor" name="autor" value="{{$libro->autor}}">
                                </div>
                                <div class="form-group">
                                    <label>Año</label>
                                    <input type="number" min="1" class="form-control" placeholder="Año" name="anho" value="{{$libro->anho}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Etiqueta</label>
                                    <input type="text" class="form-control" placeholder="Etiqueta" name="etiqueta" value="{{$libro->etiqueta}}">
                                </div>
                                <div class="form-group">
                                    <label>Serie</label>
                                    <input type="text" class="form-control" placeholder="Serie" name="serie" value="{{$libro->serie}}">
                                </div>
                                <div class="form-group">
                                    <label>Idioma</label>
                                    <input type="text" class="form-control" placeholder="Idioma" name="idioma" value="{{$libro->idioma}}">
                                </div>
                                <div class="form-group">
                                    <label>Formato</label>
                                    <input type="text" class="form-control" placeholder="Formato" name="formato" value="{{$libro->idioma}}">
                                </div>
                                <div class="form-group">
                                    <label>Cantidad de Ejemplares</label>
                                    <input type="number" min="0" class="form-control" placeholder="Cantidad de Ejemplares" name="cant_ejemplares" value="{{$libro->cant_ejemplares}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn  btn-primary">Actualizar libro</button>
                                <a href="{{ url()->previous() }}"><button class="btn btn-danger float-right">Cancelar</button></a>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection
