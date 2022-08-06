@extends('layouts.master')
<title>Sucursal</title>
@section('content')

<h3>Agregar Sucursal:</h3>
<hr>
<div class="container-sm">
    <form action="{{ url('/sucursales')}}" method="POST">
        
        <div class="mb-3">
        <label for="nombre" class="form-label"><b>Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Ingrese nombre Sucursal" aria-label="Recipient one">
        </div>
        
        <div class="mb-3">
        <label for="direccion" class="form-label"><b>Dirección</label>
        <input id="direccion" name="direccion" type="text" class="form-control" placeholder="Ingrese dirección" aria-label="Recipient two">
        </div>
        
        <br>
        <div class="mb-3">
        <label for="imagen" class="form-label"><b>Imagen</label>
        <input id="imagen" name="imagen" type="text" class="form-control" placeholder="Ingrese url img" aria-label="Recipient three">
        </div>
            
        <div class="mb-3">
        <button type="submit" class="btn btn-success">Agregar Sucursal</button>
        </div>

    </form>
    <div class="mb-3">
    <a class="nav-link" href="/"><img src="/img/back.png" width="150" height="80"></a>
    </div>
</div>
@stop