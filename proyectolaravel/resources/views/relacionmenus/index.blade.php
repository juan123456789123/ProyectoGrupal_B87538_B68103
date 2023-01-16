<h1>Mostrar lista de relacion-menú</h1>
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
                    <th>ID menu</th>
                    <th>Id controllers</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($relacionmenus as $relacion)
                <tr>
                    <td>{{ $relacion->id }}</td>
                    <td>{{ $relacion->menu_id }}</td>
                    <td>{{ $relacion->controller_id }}</td>
                    
                    <td> <a href="{{ url('relacion/'.$relacion->id.'/edit') }}" class="btn btn-success">
                            Editar
                        </a>
                    </td>
                    <td colspan="">
                        <form action="{{ url('relacion/'.$relacion->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <a class="btn btn-danger" type="submit" value="Borrar" onclick="return confirm('¿Quieres eliminar el registro?')"> borrar</a>
                        </form>
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
        <a name="" id="" class="btn btn-primary" href="{{ url('relacion/create') }}" role="button">Registrar relacion-menú</a>
    </div>
</div>
@endsection