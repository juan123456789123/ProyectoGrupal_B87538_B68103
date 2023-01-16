<h1>Formulario de actualizacion de controllers</h1> 

<form action="{{ url('/controllers/'.$controllers->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('controllers.form');
</form> 