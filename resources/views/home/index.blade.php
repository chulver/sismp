@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <div class="row">
        @can('pacientes.index')
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="small-box bg-gradient-secondary">
                <div class="inner">
                    <h3>Pacientes</h3>
                    <p>Pacientes</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-friends"></i>
                </div>
                    <a href="{{ route('pacientes.index') }}" class="small-box-footer">Acceder <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        @endcan
    </div>
@stop
