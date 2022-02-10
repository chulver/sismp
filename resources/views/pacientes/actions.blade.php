@can('pacientes.show')
    <a href="{{ route('pacientes.show', $id) }}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
@endcan
@can('pacientes.edit')
    <a href="{{ route('pacientes.edit', $id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
@endcan
