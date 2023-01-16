<h1>Formulario de actualizacion de roles</h1> 

<form action="{{ url('/roles/'.$roles->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('roles.form');
</form> 