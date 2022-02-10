@extends('adminlte::page')

@section('title', 'Pacientes')

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
            <a href="{{ route('pacientes.create') }}" class="btn btn-warning float-right"><strong>Paciente Nuevo</strong></a>
            <h3>Listado de pacientes</h3>
        </div>
        <div class="card-body">
            <table id="pacientes" class="table table-striped">
            <thead class="bg-secondary text-white">
                <tr>
                    <th scope="col">CODIGO</th>
                    <th scope="col">PACIENTE</th>
                    <th scope="col">SEXO</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            </table>
        </div>
    </div>

@stop

@section('css')
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

    <script>
            $('#pacientes').DataTable({
                "ajax": "{{ route('pacientes.datatable') }}",
                "columns": [
                    { data: 'id' },
                    { data: 'paciente' },
                    { data: 'sexo' },
                    { data: 'btn' }
                ],
                "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]],
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados",
                    "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sSearch": "Buscar:",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast":"Último",
                        "sNext":"Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "sProcessing":"Procesando...",
                }
            });
    </script>

@stop
