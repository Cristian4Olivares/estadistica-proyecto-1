@extends('adminlte::page')

@section('title', 'FORMULARIO ENDOSCOPIA')

@section('content_header')

@stop

@section('content')
<div><a href="endoscopia/create" class="btn btn-primary"> CREAR</a></div>

<h1>Endoscopia</h1>
    <form  action="/endoscopia" method="POST" >
        @csrf
        {{-- <div class="mb-3">
        <label for="" class="form-label"># Registro</label>
        <input id="id" name="id" type="text" placeholder="ID" tabindex="1">
        </div> --}}
        <div >
            <div >
            <label for="" class="form-label"># Fecha de Registro</label>
            <input id="fechaRegistro" name="fechaRegistro" required value="{{$now->format('Y-m-d')}}" type="date" placeholder="Fecha Registro"  tabindex="2" >
            </div>
            <p> </p>
            <input id="facturaNumero" name="facturaNumero" type="text" placeholder="# Factura"  tabindex="3" >
            <p> </p>
            <input id="expediente" name="expediente" type="text" placeholder="expediente"  tabindex="4" >
            <p> </p>
            <input id="nombre" name="nombre" type="text" placeholder="Nombre"  tabindex="5" >
            <p> </p>
            <div>
                <select name="input_categorias_id" id="input_categorias" > 
                    <option value="" selected disabled>---------- Selecciona una Categoria ----------</option>
                    @foreach ($categorias as $categoria)
                    <option value="{{$categoria->nombre_categoria}}">{{$categoria->nombre_categoria}}</option>
                    @endforeach
                </select>
            </div> 
            
        </div>
        {{-- <input type="password" placeholder="Nombre">
        <p> </p>
        <input type="password" placeholder="Genero">
        <p> </p>
        <input type="password" placeholder="Categoria">
        <p> </p>
        <input type="password" placeholder="fecha nacimiento">
        <input type="edad" placeholder="edad"> --}}
        <p class="acuerdo">continuar con el formulario</p>

        <a href="/endoscopia" class="btn btn-secondary" tabindex="6">BORAR</a>
        <button type="submit" class="btn btn-primary" tabindex="7">INGRESAR REGISTRO</button>
    
    </form>
        <p></p>

    
    <table id="endoscopiatbl" class="table table-blue table-striped mt-4" >
        <thead class="bg-primary text-white">
            <tr >
                <th scope ="col">N° Registro</th>
                <th scope ="col">Fecha Registro</th>
                <th scope ="col">N° Factura </th>
                <th scope ="col">Expediente</th>
                <th scope ="col">Nombre</th>
                <th scope ="col">Categoria</th>
                <th scope ="col">Acciones</th>
                
                {{-- <th scope ="col">Sexo</th>
                <th scope ="col">Categoria</th>
                <th scope ="col">Fecha Nacimiento</th>
                <th scope ="col">Edad</th>
                <th scope ="col">Grado</th>
                <th scope ="col">Fuerza</th>
                <th scope ="col">Estudio</th>
                <th scope ="col">Area</th>
                <th scope ="col">Medico</th> --}}
            </tr>
        </thead>

        <tbody>
            
            @foreach ($endoscopias as $esdoscopia)
                    <tr>
                        <td >{{$esdoscopia->id}}</td> 
                        <td>{{$esdoscopia->fechaRegistro}}</td>
                        <td>{{$esdoscopia->facturaNumero}}</td>
                        <td>{{$esdoscopia->expediente}}</td>
                        <td>{{$esdoscopia->nombre}}</td>
                        <td>{{$esdoscopia->categoria_id}}</td>
                        
                        {{-- <td>{{$esdoscopia->char}}</td>
                        <td>{{$esdoscopia->categoria}}</td>
                        <td>{{$esdoscopia->FechaNacimiento}}</td>
                        <td>{{$esdoscopia->edad}}</td>
                        <td>{{$esdoscopia->grado}}</td>
                        <td>{{$esdoscopia->fuerza}}</td>
                        <td>{{$esdoscopia->estudio}}</td>
                        <td>{{$esdoscopia->area}}</td>
                        <td>{{$esdoscopia->medico}}</td>
                        <td>{{$esdoscopia->acciones}}</td> --}}
                        <td>
                            {{-- Funcion para poder borrar y editar la informacion de las tablas --}}
                            <form action="{{route('endoscopia.destroy',$esdoscopia->id)}}" method="POST">

                                <a href="/endoscopia/{{$esdoscopia->id}}/edit" class="btn btn-info">EDITAR</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">BORRAR</button>
                                
                            </form>

                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
    $('#endoscopiatbl').DataTable({
        "LengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
});

</script>

@stop