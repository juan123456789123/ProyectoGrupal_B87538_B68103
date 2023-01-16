<h1>Mostrar lista de Controles</h1>
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
                    <th>NameControllerView</th>
                    <th>Enabled</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($controllers as $controller)
                <tr>
                    <th>{{ $controller->id }}</th>
                    <th>{{ $controller->NameControllerView }}</th>
                    <th>{{ $controller->Nombre }}</th>
                    <th>{{ $controller->Enabled }}</th>
                    <th> <a href="{{ url('controllers/'.$controller->id.'/edit') }}" class="btn btn-success">
                            Editar
                        </a>
                    </th>
                    <th>
                        <form action="{{ url('controllers/'.$controller->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-danger" type="submit" value="Borrar" onclick="return confirm('¿Quieres eliminar el registro?')">
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a name="" id="" class="btn btn-primary" href="{{ url('controllers/create') }}" role="button">Registrar Controller</a>
    </div>
</div>
@endsection