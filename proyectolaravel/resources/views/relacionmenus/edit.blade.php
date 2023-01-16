<h1>Formulario de actualizacion de menú</h1> 

<form action="{{ url('/relacion/'.$relacionmenus->id) }}" method="post">
    {{-- revisar :$relacionmenus->id --}}
    @csrf
    {{ method_field('PATCH') }}
    @include('relacionmenus.form');
</form> 