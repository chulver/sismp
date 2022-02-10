@extends('adminlte::page')

@section('title', 'Editar Paciente')

@section('content_header')

@stop

@section('content')

<div class="card">
    <div class="modal-header">
        <h3 class="modal-title">Editar paciente</h3>
	</div>
    <div class="card-body">
        <form action="{{ route('pacientes.update', $paciente) }}" method="POST">
        @csrf
        @method('put')
            <div class="row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-3">
                    <input type="text" name="nombre" class="form-control form-control-sm" value="{{ old('nombre', $paciente->nombre) }}">
                </div>
            </div>
            @error('nombre')
                <small>*{{$message}}</small>
            @enderror
            <div class="row">
                <label for="apaterno" class="col-sm-2 col-form-label">Apellido paterno:</label>
                <div class="col-sm-3">
                    <input type="text" name="apaterno" class="form-control form-control-sm" value="{{ old('apaterno', $paciente->apaterno) }}">
                </div>
            </div>
            <div class="row">
                <label for="amaterno" class="col-sm-2 col-form-label">Apellido materno:</label>
                <div class="col-sm-3">
                    <input type="text" name="amaterno" class="form-control form-control-sm" value="{{ old('amaterno', $paciente->amaterno) }}">
                </div>
            </div>
            <div class="row">
                <label class="col-form-label col-sm-2 pt-0">Sexo:</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="femenino" value="FEMENINO" {{ ($paciente->sexo=="FEMENINO")? "checked" : "" }}>
                        <label class="form-check-label" for="femenino">FEMENINO</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" id="masculino" value="MASCULINO" {{ ($paciente->sexo=="MASCULINO")? "checked" : "" }}>
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
                    <input type="date" name="fechanacimiento" class="form-control form-control-sm" value="{{ old('fechanacimiento', $paciente->fechanacimiento) }}">
                </div>
            </div>
            @error('fechanacimiento')
            <small>*{{$message}}</small>
            @enderror
            <div class="row">
                <label for="ci" class="col-sm-2 col-form-label">CI:</label>
                <div class="col-sm-2">
                    <input type="number" name="ci" class="form-control form-control-sm" value="{{ old('ci', $paciente->ci) }}">
                </div>
            </div>
            <div class="row">
                <label for="domicilio" class="col-sm-2 col-form-label">Domicilio:</label>
                <div class="col-sm-3">
                    <input type="text" name="domicilio" class="form-control form-control-sm" value="{{ old('domicilio', $paciente->domicilio) }}">
                </div>
            </div>
            <div class="row">
                <label for="telefonodomicilio" class="col-sm-2 col-form-label">Telefono domicilio:</label>
                <div class="col-sm-2">
                    <input type="number" name="telefonodomicilio" class="form-control form-control-sm" value="{{ old('telefonodomicilio', $paciente->telefonodomicilio) }}">
                </div>
            </div>
            <div class="row">
                <label for="telefonocelular" class="col-sm-2 col-form-label">Telefono celular:</label>
                <div class="col-sm-2">
                    <input type="number" name="telefonocelular" class="form-control form-control-sm" value="{{ old('telefonocelular', $paciente->telefonocelular) }}">
                </div>
            </div>
            <div class="row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-3">
                    <input type="email" name="email" class="form-control form-control-sm" value="{{ old('email', $paciente->email) }}">
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
