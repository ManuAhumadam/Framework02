@extends('layouts.master')
<title>Listado</title>
@section('content')

<h3>Total disponibles:</h3>
<hr>
<div class="container-sm">
    <table class="table">
            <tr>
                <td><b>ID Producto</td>
                <td><b>Nombre Celular</td>
                <td><b>Cantidad Stock</td>
                <td><b>Detalle</td>
                <td><b>Valor</td>
                <td></td>
            </tr>
            @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->cantidad }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->valor }}</td>
                <td><button type="button" class="btn btn-warning">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                </tr>
            @endforeach
    </table>
</div>
<br>
<br>
<h3>Agregar nuevo celular:</h3>
<br><a href="/productos/create" type="button" class="btn btn-success">Agregar</a>

@stop