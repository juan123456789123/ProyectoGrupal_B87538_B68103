<h1>Mostrar lista de Usuarios</h1>
@extends('layouts.app')



@section('content')
<div class="container">
    <div class="justify-content-center">
        
        <table class="table table-striped table-responsive table-hover">
            <caption>lista de datos</caption>
            <thead class="thead-inverse">
                @if(Session::has('mensaje'))

                <div class="center mt-4 p-1 bg-primary text-white rounded"><h3> 

                {{ Session::get('mensaje') }}
            </h3></div>
            @endif
            @if(Session::has('mens'))

                <div class="center mt-4 p-1 bg-danger text-white rounded"><h3> 

                {{ Session::get('mens') }}
            </h3></div>
            @endif
                <tr>
                    <th>ID</th>
                    <th>IdPersonal</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>NickName</th>
                    <th>rol_id</th>
                    <th>Enabled</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->IdPersonal }}</td>
                    <td>{{ $usuario->Nombre }}</td>
                    <td>{{ $usuario->Apellidos }}</td>
                    <td>{{ $usuario->Email }}</td>
                    <td>{{ $usuario->NickName }}</td>
                    <td>{{ $usuario->rol_id }}</td>
                    <td>{{ $usuario->Enabled }}</td>
                    <td> <a href="{{ url('usuarios/'.$usuario->id.'/edit') }}" class="btn btn-success">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{ url('usuarios/'.$usuario->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-danger" type="submit" value="Borrar" onclick="return confirm('¿Quieres eliminar el registro?')">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a name="" id="" class="btn btn-primary" href="{{ url('usuarios/create') }}" role="button">Registrar Usuario</a>
    </div>
</div>
@endsection