@extends('adminlte::page')

@section('template_title')
    Paciente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('AGREGAR NUEVO PACIENTE') }}
                                <style type="text/css">
                                    span{
                                        text-align: center;
                                    }
                                 </style>
                            </span>

                             {{-- <div class="float-right">
                                <a href="{{ route('pacientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <section class="content container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                
                                @includeif('partials.errors')
                
                                <div class="card card-default">
                                    <div class="card-header">
                                        <span class="card-title">{{ __('Create') }} Paciente</span>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('pacientes.store') }}"  role="form" enctype="multipart/form-data">
                                            @csrf
                
                                            @include('pacientes.form')
                
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="card">
                        <div class="table-responsive">
                            <table id="paciente" class="table table-striped table-hover" style="margin-left:auto;margin-right:auto;">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										{{-- <th>Id Paciente</th> --}}
										<th>Fecha Nacimiento</th>
										<th>Identidad Paciente</th>
										<th>Numero Serie</th>
										<th>Edad Paciente</th>
										<th>Celular Paciente</th>
										<th>Correo Paciente</th>
										<th>Nombre Paciente</th>
										<th>Apellido Paciente</th>
										<th>Grado Id</th>
										<th>Fuerza Id</th>
										<th>Genero Id</th>
										<th>Categoria Id</th>
										<th>Estado Paciente</th>
                                        <th>BOTONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pacientes as $paciente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											{{-- <td>{{ $paciente->id_paciente }}</td> --}}
											<td>{{ $paciente->fecha_nacimiento }}</td>
											<td>{{ $paciente->identidad_paciente }}</td>
											<td>{{ $paciente->numero_serie }}</td>
											<td>{{ $paciente->edad_paciente }}</td>
											<td>{{ $paciente->celular_paciente }}</td>
											<td>{{ $paciente->correo_paciente }}</td>
											<td>{{ $paciente->nombre_paciente }}</td>
											<td>{{ $paciente->apellido_paciente }}</td>
											<td>{{ $paciente->grado->tipo_grado }}</td>
											<td>{{ $paciente->fuerza->tipo_fuerza }}</td>
											<td>{{ $paciente->genero->tipo_genero }}</td>
											<td>{{ $paciente->categoria->nombre_categoria }}</td>
											<td>{{ $paciente->estado_paciente }}</td>

                                            <td>
                                                <form action="{{ route('pacientes.destroy',$paciente->id_paciente) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pacientes.show',$paciente->id_paciente ) }}"><i class="fa fa-fw fa-eye"></i> {{ __('') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pacientes.edit',$paciente->id_paciente ) }}"><i class="fa fa-fw fa-edit"></i> {{ __('') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
                {!! $pacientes->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="resources\css\style.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <style type="text/css">
        td{
            text-align: center;
        }
    </style>
   
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        $(document).ready(function () {
        $('#paciente').DataTable({
            "LengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
        });
    });
    </script>
@stop