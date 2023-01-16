<h1>Formulario de creacion de menú</h1>

  
<form action="{{ url('/menus') }}" method="post">
    @csrf
    @include('menus.form');
</form>