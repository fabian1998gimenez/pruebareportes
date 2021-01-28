<div class="table-responsive-sm">
    <table class="table table-striped" id="pacientes-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['pacientes.destroy', $paciente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pacientes.show', [$paciente->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('pacientes.edit', [$paciente->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>