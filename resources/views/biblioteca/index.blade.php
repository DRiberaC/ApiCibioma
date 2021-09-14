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
                <a href="{{route('biblioteca.create')}}"><button type="button" class="btn btn-primary">Registrar nuevo Libro</button></a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Biblioteca</h4>
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap" width="100%">
                    <thead>
                        <tr>
                            <td>Numero de inventario</td>
                            <td>Titulo</td>
                            <td>Autor</td>
                            <td>Año</td>
                            <td>Etiqueta</td>
                            <td>Serie</td>
                            <td>Idioma</td>
                            <td>Formato</td>
                            <td>Cantidad de Ejemplares</td>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($libros as $libro)
                        
                        <tr>

                            <td>{{$libro->n_inventario}}</td>
                            <td>{{$libro->titulo}}</td>
                            <td>{{$libro->autor}}</td>
                            <td>{{$libro->anho}}</td>
                            <td>{{$libro->etiqueta}}</td>
                            <td>{{$libro->serie}}</td>
                            <td>{{$libro->idioma}}</td>
                            <td>{{$libro->formato}}</td>
                            <td>{{$libro->cant_ejemplares}}</td>
                            <td>

                                <p class="mt-1">
                                    <a href="{{route('biblioteca.edit',[$libro])}}"><button type="button" class="btn btn-xs btn-warning">Editar</button></a>
                                </p>
                                <p class="mt-1">
                                    <a href="{{route('biblioteca.archivo',[$libro])}}"><button type="button" class="btn btn-xs btn-primary">Cargar archivo</button></a>
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
                        filename: 'Biblioteca',
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