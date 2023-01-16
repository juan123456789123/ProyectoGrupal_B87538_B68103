<h1>Formulario de actualizacion de menú</h1> 

<form action="{{ url('/menus/'.$menus->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('menus.form');
</form> 