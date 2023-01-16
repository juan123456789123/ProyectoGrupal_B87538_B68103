<h1>Mostrar lista de Roles</h1>
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
                    <th>NameRol</th>
                    <th>menu_id</th>
                    <th>Enabled</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $rol)
                <tr>
                    <th>{{ $rol->id }}</th>
                    <th>{{ $rol->NameRol }}</th>
                    <th>{{ $rol->menu_id }}</th>
                    <th>{{ $rol->Enabled }}</th>
                    <th> <a href="{{ url('roles/'.$rol->id.'/edit') }}" class="btn btn-success">
                            Editar
                        </a>
                    </th>
                    <th>
                        <form action="{{ url('roles/'.$rol->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-danger" type="submit" value="Borrar" onclick="return confirm('¿Quieres eliminar el registro?')">
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a name="" id="" class="btn btn-primary" href="{{ url('roles/create') }}" role="button">Registrar Rol</a>
    </div>
</div>
@endsection