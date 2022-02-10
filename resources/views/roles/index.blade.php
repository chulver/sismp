@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')

@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info')}}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a href="{{ route('roles.create') }}" class="btn btn-secondary float-right">Nuevo Role</a>
            <h3>Listado de Roles</h3>
        </div>
        <div class="card-body">
            <table id="pacientes" class="table table-striped table-bordered shadow-lg mt-4">
            <thead class="bg-secondary text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Role</th>
                    <th colspan="2">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td>
                        <a href="{{ route('roles.edit', $role) }}" class="btn btn-primary">Editar</a>
                        <button class="btn btn-danger" data-target="#modal-delete-{{$role->id}}" data-toggle="modal">Eliminar</button>
                    </td>
                </tr>
                @include('roles.modal')
                @endforeach
            </tbody>
            </table>
        </div>
    </div>

@stop

@section('css')

@stop

@section('js')

@stop
