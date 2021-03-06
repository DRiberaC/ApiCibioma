@extends('blank')

@section('contend')

@php

$carpoteca=0;
$entomologia=0;
$germoteca=0;
$herbario=0;
$palinoteca=0;
$xiloteca=0;

foreach ($muestras as $muestra) {
    switch ($muestra->tipo_id) {
        case 1:
            $carpoteca++;
            break;
        case 2:
            $entomologia++;
            break;
        case 3:
            $germoteca++;
            break;
        case 4:
            $herbario++;
            break;
        case 5:
            $palinoteca++;
            break;
        case 6:
            $xiloteca++;
            break;
        
        default:
            # code...
            break;
    }
}
    
@endphp

    <div class="row">
        
        <div class="col-xl-3 col-md-6 ">
            <div class="card d-flex w-100 mb-4 overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light h-100 overflow-hid">
                    <div class="d-flex col-auto align-items-center bg-primary">
                        <div class="card-body media align-items-center">
                            <i class="feather icon-layers display-4 d-block text-white"></i>
                        </div>
                    </div>
                    <div class="d-flex col align-items-center">
                        <div class="card-body text-dark">
                            <h2 class="mb-0">{{$muestras->count()}}</h2>
                            <p class="text-primary mb-0">Muestras</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 ">
            <div class="card d-flex w-100 mb-4 overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light h-100 overflow-hid">
                    <div class="d-flex col-auto align-items-center bg-success">
                        <div class="card-body media align-items-center">
                            <i class="mdi mdi-tree display-4 d-block text-white"></i>
                        </div>
                    </div>
                    <div class="d-flex col align-items-center">
                        <div class="card-body text-dark">
                            <h2 class="mb-0">{{$carpoteca}}</h2>
                            <p class="text-success mb-0">Carpoteca</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 ">
            <div class="card d-flex w-100 mb-4 overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light h-100 overflow-hid">
                    <div class="d-flex col-auto align-items-center bg-success">
                        <div class="card-body media align-items-center">
                            <i class="mdi mdi-tree display-4 d-block text-white"></i>
                        </div>
                    </div>
                    <div class="d-flex col align-items-center">
                        <div class="card-body text-dark">
                            <h2 class="mb-0">{{$entomologia}}</h2>
                            <p class="text-success mb-0">Entomologia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 ">
            <div class="card d-flex w-100 mb-4 overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light h-100 overflow-hid">
                    <div class="d-flex col-auto align-items-center bg-success">
                        <div class="card-body media align-items-center">
                            <i class="mdi mdi-tree display-4 d-block text-white"></i>
                        </div>
                    </div>
                    <div class="d-flex col align-items-center">
                        <div class="card-body text-dark">
                            <h2 class="mb-0">{{$germoteca}}</h2>
                            <p class="text-success mb-0">Germoteca</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 ">
            <div class="card d-flex w-100 mb-4 overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light h-100 overflow-hid">
                    <div class="d-flex col-auto align-items-center bg-success">
                        <div class="card-body media align-items-center">
                            <i class="mdi mdi-tree display-4 d-block text-white"></i>
                        </div>
                    </div>
                    <div class="d-flex col align-items-center">
                        <div class="card-body text-dark">
                            <h2 class="mb-0">{{$herbario}}</h2>
                            <p class="text-success mb-0">Herbario</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 ">
            <div class="card d-flex w-100 mb-4 overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light h-100 overflow-hid">
                    <div class="d-flex col-auto align-items-center bg-success">
                        <div class="card-body media align-items-center">
                            <i class="mdi mdi-tree display-4 d-block text-white"></i>
                        </div>
                    </div>
                    <div class="d-flex col align-items-center">
                        <div class="card-body text-dark">
                            <h2 class="mb-0">{{$palinoteca}}</h2>
                            <p class="text-success mb-0">Palinoteca</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 ">
            <div class="card d-flex w-100 mb-4 overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light h-100 overflow-hid">
                    <div class="d-flex col-auto align-items-center bg-success">
                        <div class="card-body media align-items-center">
                            <i class="mdi mdi-tree display-4 d-block text-white"></i>
                        </div>
                    </div>
                    <div class="d-flex col align-items-center">
                        <div class="card-body text-dark">
                            <h2 class="mb-0">{{$xiloteca}}</h2>
                            <p class="text-success mb-0">Xiloteca</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection