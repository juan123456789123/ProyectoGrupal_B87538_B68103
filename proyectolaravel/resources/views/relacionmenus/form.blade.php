@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="menu_id" id="menu_id" aria-describedby="helpId" placeholder="menu_id" value="{{ isset($relacionmenus->menu_id)?$relacionmenus->menu_id:'' }}">
      <small id="helpId" class="form-text text-muted">menu_id</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="controller_id" id="controller_id" aria-describedby="helpId" placeholder="controller_id" value="{{ isset($relacionmenus->controller_id)?$relacionmenus->controller_id:'' }}">
      <small id="helpId" class="form-text text-muted">controller_id</small>
    </div>
    
    <div class="mb-3">
      <button type="submit" class="btn btn-success" href="{{ url('relacionmenus/') }}">Enviar</button>
    </div>
  </div>
</div>
@endsection