@extends('adminlte::page')

@section('template_title')
    Emergencia General
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Emergencia General') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('emergenciagnr.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="emergenciagnl" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Emergencia</th>
										<th>Fecha Registro</th>
										<th>Paciente Id</th>
										<th>Depto Id</th>
										<th>Municipio Id</th>
										<th>Nombre Colonia</th>
										<th>Especialidad Id</th>
										<th>Medico Id</th>
										<th>Diagnostico</th>
										<th>Turno</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($emergenciaGenerals as $emergenciaGeneral)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $emergenciaGeneral->id_emergencia }}</td>
											<td>{{ $emergenciaGeneral->Fecha_Registro }}</td>
											<td>{{ $emergenciaGeneral->paciente_id }}</td>
											<td>{{ $emergenciaGeneral->depto_id }}</td>
											<td>{{ $emergenciaGeneral->municipio_id }}</td>
											<td>{{ $emergenciaGeneral->nombre_colonia }}</td>
											<td>{{ $emergenciaGeneral->especialidad_id }}</td>
											<td>{{ $emergenciaGeneral->medico_id }}</td>
											<td>{{ $emergenciaGeneral->Diagnostico }}</td>
											<td>{{ $emergenciaGeneral->turno }}</td>

                                            <td>
                                                <form action="{{ route('emergenciagnr.destroy',$emergenciaGeneral->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('emergenciagnr.show',$emergenciaGeneral->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('emergenciagnr.edit',$emergenciaGeneral->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $emergenciaGenerals->links() !!}
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="resources\css\style.css">
    <style type="text/css">
        td{
            text-align: center;
        }

    </style>
  {{--   <style>
        .contenedor {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 50vh;  /*Opcional: para centrar verticalmente también */

        }
      </style> --}}
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        $(document).ready(function () {
        $('#emergenciagnl').DataTable({
            "LengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
        });
    });
    </script>
{{-- 
<script>
    // Escucha el evento de cambio en el select de especialidades
    document.getElementById('especialidad').addEventListener('change', function() {
        var especialidadIdEmer = this.value;
        console.log(especialidadIdEmer),
        // Realiza una petición AJAX para obtener los médicos por especialidad
        axios.get('medicos/especialidad_medicos/' + especialidadIdEmer)
            .then(function(response) {
                var selectMedicos = document.getElementById('medico');
                    
                selectMedicos.innerHTML = '-------'; // Limpia las opciones anteriores
                
                var optionEmpty = document.createElement('option');
                optionEmpty.value = '';
                optionEmpty.text = '---Selecciona un médico---';
                optionEmpty.selected = true;
                optionEmpty.disabled = true;
                selectMedicos.appendChild(optionEmpty);

                // Agrega las opciones de médicos al select
                response.data.forEach(function(medico) {

                    var option = document.createElement('option');
                    option.value = medico.idMedicos;
                    option.text = medico.nombre_medico;
                    
                    selectMedicos.appendChild(option);
                    
                });
            })
            
            
            .catch(function(error) {
                console.log(error.response.data);
            });
        
    });
    
     document.getElementById('medico').addEventListener('change', function() {
    var medicoId = this.value;
     // Asignar el valor del médico seleccionado al input oculto
    document.getElementById('medico_idInput').value = medicoId;
    console.log(document.getElementById('medico_id').value = medicoId), console.log('3');

    // Realiza una petición AJAX para guardar el ID del médico seleccionado
    /*  axios.post('medico', { medico_id: medicoId })
    .then(function(response) {
        console.log(response.data);
        
        // Maneja la respuesta del servidor, si es necesario
    }) */
    .catch(function(error) {
        console.log(error.response.data);
    });
    }); 

</script>  --}}
    
@stop
