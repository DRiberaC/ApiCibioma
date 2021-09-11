@extends('blank')

@section('style')
        <!-- third party css -->
        <link href="{{ asset('shimba/assets/css/vendor/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('shimba/assets/css/vendor/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('shimba/assets/css/vendor/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('shimba/assets/css/vendor/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
@endsection

@section('contend')

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">
                <a href="{{route('coleccion.create',[$tipo->slug])}}"><button type="button" class="btn btn-primary">Registrar nueva colección</button></a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Colección {{$tipo->nombre}}</h4>
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap" width="100%">
                    <thead>
                        <tr>
                            {{-- <th>Name</th> --}}

                            {{-- <th>Colección</th> --}}
                            <th>Código y N° de colección</th>
                            <th>Colector</th>
                            {{-- <th>Procesado por</th> --}}
                            {{-- <th>Muestra de respaldo</th> --}}
                            <th>Fecha</th>
                            <th>Reino</th>
                            <th>Phylum/Division</th>
                            <th>Clase</th>
                            <th>Clase</th>
                            <th>Familia</th>
                            <th>Subfamilia</th>
                            <th>Género</th>
                            {{-- <th>Especie</th> --}}
                            {{-- <th>Variedad</th> --}}
                            <th>Epíteto específico</th>
                            <th>Nombre científico</th>
                            <th>Nombre completo</th>
                            <th>Nombre común</th>
                            <th>Lugar colecta</th>
                            <th>Provincia</th>
                            <th>Departamento</th>
                            <th>País</th>
                            <th>Datum</th>
                            <th>Latitud</th>
                            <th>Longitud</th>
                            <th>Altitud</th>
                            <th>geo_lat</th>
                            <th>geo_lon</th>
                            <th>Área protegida</th>
                            <th>Método colecta</th>
                            <th>Identificado por</th>
                            <th>Tipo de registro</th>
                            <th>Cantidad de ejemplares</th>
                            {{-- <th>Localización</th> --}}
                            <th>Sexo</th>
                            <th>Edad</th>
                            <th>Notas</th>
                            {{-- <th>Agrupación</th> --}}
                            {{-- <th>Tamaño grano v.p. μ</th> --}}
                            {{-- <th>Tamaño grano v.e. μ</th> --}}
                            {{-- <th>Forma</th> --}}
                            {{-- <th>Aperturas</th> --}}
                            {{-- <th>Ornamentación</th> --}}
                            <th>Opciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($muestras as $muestra)
                        
                        <tr>
                            {{-- <td>{{$muestra->tipo->nombre}}</td> --}}
                            <td>{{$muestra->codigo_y_n_de_coleccion}}</td>
                            <td>{{$muestra->colector}}</td>
                            {{-- <td>{{$muestra->tipo->procesado}}</td> --}}
                            {{-- <td>{{$muestra->tipo->muestra_respaldo}}</td> --}}
                            <td>{{$muestra->fecha_de_coleccion}}</td>
                            <td>{{$muestra->reino}}</td>
                            <td>{{$muestra->phylum_division}}</td>
                            <td>{{$muestra->clase}}</td>
                            <td>{{$muestra->orden}}</td>
                            <td>{{$muestra->familia}}</td>
                            <td>{{$muestra->tipo->subfamilia}}</td>
                            <td>{{$muestra->genero}}</td>
                            {{-- <td>{{$muestra->especie}}</td> --}}
                            {{-- <td>{{$muestra->variedad}}</td> --}}
                            <td>{{$muestra->epiteto_especifico}}</td>
                            <td>{{$muestra->nombre_cientifico}}</td>
                            <td>{{$muestra->nombre_completo}}</td>
                            <td>{{$muestra->nombre_comun}}</td>
                            <td>{{$muestra->lugar_colecta}}</td>
                            <td>{{$muestra->provincia}}</td>
                            <td>{{$muestra->departamento}}</td>
                            <td>{{$muestra->pais}}</td>
                            <td>{{$muestra->datum}}</td>
                            <td>{{$muestra->latitud}}</td>
                            <td>{{$muestra->longitud}}</td>
                            <td>{{$muestra->altitud}}</td>
                            <td>{{$muestra->geo_lat}}</td>
                            <td>{{$muestra->geo_lon}}</td>
                            <td>{{$muestra->area_protegida}}</td>
                            <td>{{$muestra->metodo_colecta}}</td>
                            <td>{{$muestra->identificado}}</td>
                            <td>{{$muestra->tipo_registro}}</td>
                            <td>{{$muestra->cant_ejemplares}}</td>
                            {{-- <td>{{$muestra->localizacion}}</td> --}}
                            <td>{{$muestra->sexo}}</td>
                            <td>{{$muestra->edad}}</td>
                            <td>{{$muestra->notas}}</td>
                            {{-- <td>{{$muestra->tipo->agrupacion}}</td> --}}
                            {{-- <td>{{$muestra->tipo->tamanho_vp}}</td> --}}
                            {{-- <td>{{$muestra->tipo->tamanho_ve}}</td> --}}
                            {{-- <td>{{$muestra->tipo->forma}}</td> --}}
                            {{-- <td>{{$muestra->tipo->apertura}}</td> --}}
                            {{-- <td>{{$muestra->tipo->ornamentacion}}</td> --}}
                            <td>

                                <p class="mt-1">
                                    <a href="{{route('coleccion.edit',[$muestra])}}"><button type="button" class="btn btn-xs btn-warning">Editar</button></a>
                                </p>
                                <p class="mt-1">
                                    <button type="button" class="btn btn-xs btn-primary">Agregar Imagen</button>
                                </p>

                            </td>
                            
                        </tr>

                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
    
@endsection

@section('scripts')
    
    <!-- third party js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="{{ asset('shimba/assets/js/vendor/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('shimba/assets/js/vendor/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('shimba/assets/js/vendor/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('shimba/assets/js/vendor/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('shimba/assets/js/vendor/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('shimba/assets/js/vendor/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('shimba/assets/js/vendor/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('shimba/assets/js/vendor/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('shimba/assets/js/vendor/buttons.print.min.js') }}"></script>
    <script src="{{ asset('shimba/assets/js/vendor/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('shimba/assets/js/vendor/dataTables.select.min.js') }}"></script>
    <!-- third party js ends --> 

    <script>
        var table = $('#datatable-buttons').DataTable({
                ordering: false,
                lengthChange: false,
                /* buttons: ['copy'], */
                buttons: [
                    {
                        extend: 'excel',
                        text: 'Exportar a Excel',
                        filename: '{{$tipo->nombre}}',
                        className: 'btn btn-success',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    }
                ],
                "language": {
                    "paginate": {
                        "previous": "<i class='mdi mdi-chevron-left'>",
                        "next": "<i class='mdi mdi-chevron-right'>"
                    }
                },
                "drawCallback": function () {
                    $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                }
            });
        table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    </script>

@endsection