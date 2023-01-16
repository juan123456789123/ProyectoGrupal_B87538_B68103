@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="NameRol" id="NameRol" aria-describedby="helpId" placeholder="NameRol" value="{{ isset($roles->NameRol)?$roles->NameRol:'' }}">
      <small id="helpId" class="form-text text-muted">NameRol</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="menu_id" id="menu_id" aria-describedby="helpId" placeholder="menu_id" value="{{ isset($roles->menu_id)?$roles->menu_id:'' }}">
      <small id="helpId" class="form-text text-muted">menu_id</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="Enabled" id="Enabled" aria-describedby="helpId" placeholder="Enabled" value="{{ isset($roles->Enabled)?$roles->Enabled:'' }}">
      <small id="helpId" class="form-text text-muted">Enabled</small>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-success" href="{{ url('roles/') }}"">Enviar</button>
    </div>
  </div>
</div>
@endsection