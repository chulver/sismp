@extends('adminlte::page')

@section('title', 'Mostrar Paciente')

@section('content_header')

@stop

@section('content')

    <div class="card">
        <div class="modal-header">
            <h3 class="modal-title">Paciente</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <label class="col-sm-2 col-form-label">Nombre:</label>
                <p class="form-control col-sm-3 col-form-label form-control-sm">{{ $paciente->nombre }}</p></p>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Apellido paterno:</label>
                <p class="form-control col-sm-3 col-form-label form-control-sm">{{ $paciente->apaterno }}</p></p>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Apellido materno:</label>
                <p class="form-control col-sm-3 col-form-label form-control-sm">{{ $paciente->amaterno }}</p></p>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Genero:</label>
                <p class="form-control col-sm-2 col-form-label form-control-sm">{{ $paciente->sexo }}</p></p>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Fecha de nacimiento:</label>
                <p class="form-control col-sm-2 col-form-label form-control-sm">{{ \Carbon\Carbon::parse($paciente->fechanacimiento)->format('d/m/Y') }}</p></p>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">CI:</label>
                <p class="form-control col-sm-2 col-form-label form-control-sm">{{ $paciente->ci }}</p></p>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Domicilio:</label>
                <p class="form-control col-sm-3 col-form-label form-control-sm">{{ $paciente->domicilio }}</p></p>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Telefono domicilio:</label>
                <p class="form-control col-sm-2 col-form-label form-control-sm">{{ $paciente->telefonodomicilio }}</p></p>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Telefeno celular:</label>
                <p class="form-control col-sm-2 col-form-label form-control-sm">{{ $paciente->telefonocelular }}</p></p>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">Email:</label>
                <p class="form-control col-sm-3 col-form-label form-control-sm">{{ $paciente->email }}</p></p>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
