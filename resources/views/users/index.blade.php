@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')

@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Listado de Usuarios</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="bg-secondary text-white">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>ACCIONES</th>
                <thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('users.edit', $user) }}">Editar</a>
                        </td>
                    </tr>
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
