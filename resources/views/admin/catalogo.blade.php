@extends('layout-admin')

@section('title', 'Backoffice Monllar ')

@section('content')

        <div class="row">
            <div class="col-sm-12">
                <a href="{{url('admin/catalogo/create')}}" class="float-right btn btn-info">Crear Catálogo </a><br><br>
            </div>
        </div>

        <table class="table table-bordered table-hover">
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Eliminar</td>
                <td>Editar</td>
            </tr>
            @foreach($catalogos as $catalogo)

                <tr>
                    <td>{{$catalogo->id}}</td>
                    <td>{{$catalogo->nombre}}</td>
                    <td><a href="" class="btn btn-danger">Eliminar</a></td>
                    <td><a href="" class="btn btn-success">Editar</a></td>
                </tr>

            @endforeach
        </table>


@endsection
