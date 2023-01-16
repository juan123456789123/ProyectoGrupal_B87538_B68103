<h1>Formulario de creacion de usuarios</h1>

  
<form action="{{ url('/usuarios') }}" method="post">
    @csrf
    @include('usuarios.form');
</form>
