@extends('layout-admin')

@section('title', 'Backoffice Monllar ')


@section('content')

    <a href="{{url('/admin/user/create')}}" class="float-left btn btn-info">Añadir nuevo usuarios </a><br><br>

    <table class="table table-hover table-bordered">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Mail</th>
            <th>Tipo Perfil</th>
            <th>Eliminar</th>
        </tr>

        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->perfiles->perfil}}</td>
            <td>
                {!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $usuario->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>

        @endforeach

    </table>

    {{ $usuarios->links() }}

@endsection

@section('javascript')
    <script src="{{asset('js/admin/helpers.js')}}"></script>

    <script>
        quitarLaFuncionalidadEnviarDelBotonEliminar();
    </script>
@endsection