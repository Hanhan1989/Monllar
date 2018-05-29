@extends('layout-admin')

@section('title', 'Backoffice Monllar ')

@section('content')


    <a href="{{url('admin/perfil/create')}}" class="float-left btn btn-info">Añadir perfil </a><br><br>


    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Perfil</th>
            <th scope="col">Descripción</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Editar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($perfiles as $perfil)

            <tr>
                <th>{{$perfil->id}}</th>
                <th>{{$perfil->perfil}}</th>
                <th>{{$perfil->descripcion}}</th>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['perfil.destroy', $perfil->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
                <td><a href="{{url('admin/perfil/'.$perfil->id.'/edit')}}" class="btn btn-success">Editar</a></td>
            </tr>

        @endforeach
        </tbody>
    </table>

@endsection

@section('javascript')
    <script src="{{asset('js/admin/helpers.js')}}"></script>

    <script>
        quitarLaFuncionalidadEnviarDelBotonEliminar();
    </script>
@endsection