<h1>Formulario de actualizacion de usuarios</h1> 

<form action="{{ url('/usuarios/'.$usuarios->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('usuarios.form');
</form> 