<h1>Formulario de creacion de controladores</h1>

  
<form action="{{ url('/controllers') }}" method="post">
    @csrf
    @include('controllers.form');
</form>