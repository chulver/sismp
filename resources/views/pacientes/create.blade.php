@extends('adminlte::page')

@section('title', 'Registrar Paciente')

@section('content_header')

@stop

@section('content')

<div class="card">
    <div class="modal-header">
        <h3 class="modal-title">Registrar paciente</h3>
	</div>
    <div class="card-body">
        <form action="{{ route('pacientes.store') }}" method="POST">
        @csrf
            <div class="row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-3">
                    <input type="text" name="nombre" class="form-control form-control-sm font-weight-bold" value="{{ old('nombre') }}">
                </div>
            </div>
            @error('nombre')
                <small>*{{$message}}</small>
            @enderror
            <div class="row">
                <label for="apaterno" class="col-sm-2 col-form-label">Apellido paterno:</label>
                <div class="col-sm-3">
                    <input type="text" name="apaterno" class="form-control form-control-sm font-weight-bold" value="{{ old('apaterno') }}">
                </div>
            </div>
            <div class="row">
                <label for="amaterno" class="col-sm-2 col-form-label">Apellido materno:</label>
                <div class="col-sm-3">
                    <input type="text" name="amaterno" class="form-control form-control-sm font-weight-bold" value="{{ old('amaterno') }}">
                </div>
            </div>
            <div class="row">
                <label class="col-form-label col-sm-2 pt-0">Genero:</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="femenino" value="FEMENINO">
                        <label class="form-check-label" for="femenino">FEMENINO</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="masculino" value="MASCULINO">
                        <label class="form-check-label" for="masculino">MASCULINO</label>
                    </div>
                </div>
            </div>
            @error('sexo')
            <small>*{{$message}}</small>
            @enderror
            <div class="row">
                <label for="fechanacimiento" class="col-sm-2 col-form-label">Fecha de nacimiento:</label>
                <div class="col-sm-2">
                    <input type="date" name="fechanacimiento" class="form-control form-control-sm font-weight-bold" value="{{ old('fechanacimiento') }}">
                </div>
            </div>
            @error('fechanacimiento')
            <small>*{{$message}}</small>
            @enderror
            <div class="row">
                <label for="ci" class="col-sm-2 col-form-label">CI:</label>
                <div class="col-sm-2">
                    <input type="number" name="ci" class="form-control form-control-sm font-weight-bold" value="{{ old('ci') }}">
                </div>
            </div>
            <div class="row">
                <label for="fechanacimiento" class="col-sm-2 col-form-label">Domicilio:</label>
                <div class="col-sm-3">
                    <input type="text" name="domicilio" class="form-control form-control-sm font-weight-bold" value="{{ old('domicilio') }}">
                </div>
            </div>
            <div class="row">
                <label for="fechanacimiento" class="col-sm-2 col-form-label">Telefono domicilio:</label>
                <div class="col-sm-2">
                    <input type="number" name="telefonodomicilio" class="form-control form-control-sm font-weight-bold" value="{{ old('telefonodomicilio') }}">
                </div>
            </div>
            <div class="row">
                <label for="fechanacimiento" class="col-sm-2 col-form-label">Telefono celular:</label>
                <div class="col-sm-2">
                    <input type="number" name="telefonocelular" class="form-control form-control-sm font-weight-bold" value="{{ old('telefonocelular') }}">
                </div>
            </div>
            <div class="row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-3">
                    <input type="email" name="email" class="form-control form-control-sm font-weight-bold" value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </form>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
