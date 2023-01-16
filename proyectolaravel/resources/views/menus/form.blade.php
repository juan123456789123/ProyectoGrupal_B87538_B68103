@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="NameMenu" id="NameMenu" aria-describedby="helpId" placeholder="NameMenu" value="{{ isset($menus->NameMenu)?$menus->NameMenu:'' }}">
      <small id="helpId" class="form-text text-muted">NameMenu</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="relacionmenu_id" id="relacionmenu_id" aria-describedby="helpId" placeholder="relacionmenu_id" value="{{ isset($menus->relacionmenu_id)?$menus->relacionmenu_id:'' }}">
      <small id="helpId" class="form-text text-muted">relacionmenu_id</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="Enabled" id="Enabled" aria-describedby="helpId" placeholder="Enabled" value="{{ isset($menus->Enabled)?$menus->Enabled:'' }}">
      <small id="helpId" class="form-text text-muted">Enabled</small>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-success" href="{{ url('menus/') }}">Enviar</button>
    </div>
  </div>
</div>
@endsection