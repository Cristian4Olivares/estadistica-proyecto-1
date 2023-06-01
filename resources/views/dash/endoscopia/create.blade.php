@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2>CARGAR CONTENIDO</h2>    
<a href="/endoscopia" class="btn btn-primary"> CREAR</a>

    <div >
        <h1>Endoscopia</h1>
        <form  action="/endoscopia" method="POST">
            @csrf
            {{-- <div class="mb-3">
            <label for="" class="form-label"># Registro</label>
            <input id="id" name="id" type="text" placeholder="ID" tabindex="1">
            </div> --}}
            <div>
            <label for="" class="form-label"># Fecha de Registro</label>
            <input id="fechaRegistro" name="fechaRegistro" type="date" placeholder="Fecha Registro"  tabindex="2">
            </div>
            <p> </p>
            <input id="facturaNumero" name="facturaNumero" type="text" placeholder="# Factura"  tabindex="3">
            <p> </p>
            <input id="expediente" name="expediente" type="text" placeholder="expediente"  tabindex="4">
            <p> </p>
            <input id="nombre" name="nombre" type="text" placeholder="Nombre"  tabindex="5" class="form-control">
            <p> </p>
            <select name="input_categorias_id" id="input_categorias" class="form-control"> 
                @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
                @endforeach
            </select> 
            
            {{-- <input type="password" placeholder="Nombre">
            <p> </p>
            <input type="password" placeholder="Genero">
            <p> </p>
            <input type="password" placeholder="Categoria">
            <p> </p>
            <input type="password" placeholder="fecha nacimiento">
            <input type="edad" placeholder="edad"> --}}

            <a href="/endoscopia" class="btn btn-secondary" tabindex="6">CANCELAR</a>
            <button type="submit" class="btn btn-primary" tabindex="7">Ingresar registro</button>
           
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop