<h1>Formulario de creacion de roles</h1>

  
<form action="{{ url('/roles') }}" method="post">
    @csrf
    @include('roles.form');
</form>