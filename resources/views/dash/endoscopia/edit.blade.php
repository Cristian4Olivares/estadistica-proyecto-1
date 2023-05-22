@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>prueba</h1>
<div >
    <h1>Endoscopia</h1>
    <form  action="/endoscopia/{{$endoscopias->id}}" method="POST">
        @csrf
        @method('PUT')
        {{-- <div class="mb-3">
        <label for="" class="form-label"># Registro</label>
        <input id="id" name="id" type="text" placeholder="ID" tabindex="1">
        </div> --}}
        <div>
        <label for="" class="form-label"># Fecha de Registro</label>
        <input id="fechaRegistro" name="fechaRegistro" type="date" placeholder="Fecha Registro"  tabindex="2" value="{{$endoscopias->fechaRegistro}}">
        </div>
        <p> </p>
        <input id="facturaNumero" name="facturaNumero" type="text" placeholder="# Factura"  tabindex="3" value="{{$endoscopias->facturaNumero}}">
        <p> </p>
        <input id="expediente" name="expediente" type="text" placeholder="expediente"  tabindex="4" value="{{$endoscopias->expediente}}">
        <p> </p>
        <input id="nombre" name="nombre" type="text" placeholder="Nombre"  tabindex="5" value="{{$endoscopias->nombre}}">
        
        {{-- <input type="password" placeholder="Nombre">
        <p> </p>
        <input type="password" placeholder="Genero">
        <p> </p>
        <input type="password" placeholder="Categoria">
        <p> </p>
        <input type="password" placeholder="fecha nacimiento">
        <input type="edad" placeholder="edad"> --}}
        <p class="acuerdo">Accion que desea hacer</p>
        
        <a href="/endoscopia" class="btn btn-secondary" tabindex="6">CANCELAR</a>
        <button type="submit" class="btn btn-primary" tabindex="7">GUARDAR</button>
    
    </form>
</div>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop