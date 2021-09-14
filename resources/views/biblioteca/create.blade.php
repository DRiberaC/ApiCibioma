@extends('blank')

@section('contend')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Registrar colección de </h5>
                </div>

                <form action="{{ route('biblioteca.store') }}" method="POST">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                @csrf
                                <div class="form-group">
                                    <label>Numero de inventario</label>
                                    <input type="text" class="form-control" placeholder="Numero de inventario" name="n_inventario">
                                </div>
                                <div class="form-group">
                                    <label>Titulo</label>
                                    <input type="text" class="form-control" placeholder="Titulo" name="titulo">
                                </div>
                                <div class="form-group">
                                    <label>Autor</label>
                                    <input type="text" class="form-control" placeholder="Autor" name="autor">
                                </div>
                                <div class="form-group">
                                    <label>Año</label>
                                    <input type="number" min="1" class="form-control" placeholder="Año" name="anho">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Etiqueta</label>
                                    <input type="text" class="form-control" placeholder="Etiqueta" name="etiqueta">
                                </div>
                                <div class="form-group">
                                    <label>Serie</label>
                                    <input type="text" class="form-control" placeholder="Serie" name="serie">
                                </div>
                                <div class="form-group">
                                    <label>Idioma</label>
                                    <input type="text" class="form-control" placeholder="Idioma" name="idioma">
                                </div>
                                <div class="form-group">
                                    <label>Formato</label>
                                    <input type="text" class="form-control" placeholder="Formato" name="formato">
                                </div>
                                <div class="form-group">
                                    <label>Cantidad de Ejemplares</label>
                                    <input type="number" min="0" value="0" class="form-control" placeholder="Cantidad de Ejemplares" name="cant_ejemplares">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn  btn-primary">Registrar libro</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection
