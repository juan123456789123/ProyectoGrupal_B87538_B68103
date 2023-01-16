<h1>Formulario de creacion de relación-menú</h1>

  
<form action="{{ url('/relacion') }}" method="post">
    @csrf
    @include('relacionmenus.form');
</form>