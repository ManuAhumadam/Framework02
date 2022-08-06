@extends('layouts.master')
<title>Agregar</title>
@section('content')

<h3>Ingrese producto:</h3>
<hr>
<div class="container-sm">
    <form action="{{ url('/productos')}}" method="POST">
        
        <div class="mb-3">
        <label for="codigounico" class="form-label"><b>Codigo Unico</label>
        <input id="codigounico" name="codigounico" type="text" class="form-control" placeholder="Ingrese Código" aria-label="Recipient one">
        </div>
        
        <div class="mb-3">
        <label for="nombre" class="form-label"><b>Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Ingrese nombre celular" aria-label="Recipient two">
        </div>
        
        <br>
        <div class="mb-3">
        <label for="cantidad" class="form-label"><b>Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" placeholder="Ingrese Cantidad de celulares" aria-label="Recipient three">
        </div>
            
        <br>
        <div class="mb-3">
        <label for="descripcion" class="form-label"><b>Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" placeholder="Ingrese descripción de productos" aria-label="Recipient four">
        </div>

        <br>
        <div class="mb-3">
        <label for="valor" class="form-label"><b>Valor</label>
        <input id="valor" name="valor" type="integer" class="form-control" placeholder="Ingrese precio del productos" aria-label="Recipient five">
        </div>

        <div class="mb-3">
        <label for="categoria_id" class="form-label"><b>Categoria (Gama)</label>
        <input id="categoria_id" name="categoria_id" type="integer" class="form-control" placeholder="AltaGama(1), MediaGama(2),BajaGama(3)" aria-label="Recipient five">
        </div>

        <div class="mb-3">
        <label for="sucursal_id" class="form-label"><b>Sucursal</label>
        <input id="sucursal_id" name="sucursal_id" type="integer" class="form-control" placeholder="1 , 2 , 3" aria-label="Recipient five">
        </div>

        <div class="mb-3">
        <button type="submit" class="btn btn-success">Agregar celular</button>
        </div>

    </form>

    <div class="mb-3">
    <a class="nav-link" href="/"><img src="/img/back.png" width="150" height="80"></a>
    </div>
</div>
@stop