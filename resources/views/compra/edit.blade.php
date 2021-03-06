@extends('layouts.plantillabase')
@section('contenido')
<h1>EDITAR REGISTRO</h1>
<form action="\compras/{{$compra->id}}" method="post">
@csrf
@method('PUT')
<div class="mb-3">
        <label for="" class="form-label">id</label>
        <input type="text" id="codigo" name="codigo" class="form-control" tabindex="1" value="{{$articulo->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">producto</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" tabindex="2" value="{{$articulo->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">precio</label>
        <input type="number" id="cantidad" name="cantidad" class="form-control" tabindex="3" value="{{$articulo->cantidad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">cantidad</label>
        <input type="number" id="precio" name="precio" step="any" value="0.00" class="form-control" tabindex="4" value="{{$articulo->precio}}">
    </div>
    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection