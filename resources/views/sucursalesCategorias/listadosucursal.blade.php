@extends('layouts.master')
<title>Sucursales</title>
@section('content')

<h3>Nuestras Sucursales:</h3>
<hr>
<div class="row">
    @foreach($sucursales as $sucursal)
        <div class="col-3">
            <div class="card" style="width: 20rem;">
                <img src="{{ $sucursal->imagen }}" alt="{{ $sucursal->nombre }}">
                <div class="card-body">  
                    <h4 class="card-tittle">{{ $sucursal->nombre }}</h4>
                    <h5 class="card-text">{{ $sucursal->direccion }}</h5>
                </div>
                <div class="card-footer" role="group">
                    <a href="/productos/{{ $sucursal->id }}" type="button" class="btn btn-success">Revisar Productos</a>
                </div>    
            </div>
        </div>
    @endforeach
</div>

<br>
<br>
<a href="/sucursales/create" type="button" class="btn btn-warning">Agregar Sucursal</a>
<br>
@stop