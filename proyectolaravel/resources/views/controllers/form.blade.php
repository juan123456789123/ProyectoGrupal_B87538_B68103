@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="NameControllerView" id="NameControllerView" aria-describedby="helpId" placeholder="NameControllerView" value="{{ isset($controllers->NameControllerView)?$controllers->NameControllerView:'' }}">
      <small id="helpId" class="form-text text-muted">NameControllerView</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label"></label>
      <input type="text" class="form-control" name="Enabled" id="Enabled" aria-describedby="helpId" placeholder="Enabled" value="{{ isset($controllers->Enabled)?$controllers->Enabled:'' }}">
      <small id="helpId" class="form-text text-muted">Enabled</small>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-success" href="{{ url('controllers/') }}"">Enviar</button>
    </div>
  </div>
</div>
@endsection