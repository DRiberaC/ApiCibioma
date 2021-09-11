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
                <h4 class="header-title">Colección {{$tipo->nombre}}</h4>
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td>$112,000</td>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td>$112,000</td>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td>$112,000</td>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td>$112,000</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
    
@endsection

@section('scripts')
    
    <!-- third party js -->
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
                lengthChange: false,
                buttons: ['copy'],
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
    </script>

@endsection