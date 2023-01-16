@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="IdPersonal" id="IdPersonal" aria-describedby="helpId" placeholder="IdPersonal" value="{{ isset($usuarios->IdPersonal)?$usuarios->IdPersonal:'' }}">
      <small id="helpId" class="form-text text-muted">IdPersonal</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="Nombre" id="Nombre" aria-describedby="helpId" placeholder="Nombre" value="{{ isset($usuarios->Nombre)?$usuarios->Nombre:'' }}">
      <small id="helpId" class="form-text text-muted">Nombre</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="Apellidos" id="Apellidos" aria-describedby="helpId" placeholder="Apellidos" value="{{ isset($usuarios->Apellidos)?$usuarios->Apellidos:'' }}">
      <small id="helpId" class="form-text text-muted">Apellidos</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="Email" id="Email" aria-describedby="helpId" placeholder="Email" value="{{ isset($usuarios->Email)?$usuarios->Email:'' }}">
      <small id="helpId" class="form-text text-muted">Email</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="NickName" id="NickName" aria-describedby="helpId" placeholder="NickName" value="{{ isset($usuarios->NickName)?$usuarios->NickName:'' }}">
      <small id="helpId" class="form-text text-muted">NickName</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="Password" id="Password" aria-describedby="helpId" placeholder="Password" value="{{ isset($usuarios->Password)?$usuarios->Password:'' }}">
      <small id="helpId" class="form-text text-muted">Password</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="rol_id" id="rol_id" aria-describedby="helpId" placeholder="rol_id" value="{{ isset($usuarios->rol_id)?$usuarios->rol_id:'' }}">
      <small id="helpId" class="form-text text-muted">rol_id</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="Enabled" id="Enabled" aria-describedby="helpId" placeholder="Enabled" value="{{ isset($usuarios->Enabled)?$usuarios->Enabled:'' }}">
      <small id="helpId" class="form-text text-muted">Enabled</small>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-success" href="{{ url('usuarios/') }}"">Enviar</button>
    </div>
  </div>
</div>
@endsection