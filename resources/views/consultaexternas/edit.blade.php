@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Consultaexterna
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Consultaexterna</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('consultaexternas.update', $consultaexterna->idConsultaExt) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('consultaexternas.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    $('#consultaext').DataTable({
        "LengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
});
</script>

<script>
    // Escucha el evento de cambio en el select de especialidades
    document.getElementById('especialidad').addEventListener('change', function() {
        var especialidadId = this.value;
        console.log(especialidadId),
        // Realiza una petición AJAX para obtener los médicos por especialidad
        axios.get('medicos/especialidad_medicos/' + especialidadId)
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
    console.log(medicoId),
     // Asignar el valor del médico seleccionado al input oculto
    document.getElementById('medico_idInput').value = medicoId;
    console.log(document.getElementById('medico_id').value = medicoId), console.log('3');

    // Realiza una petición AJAX para guardar el ID del médico seleccionado
     axios.post('medico', { medico_id: medicoId })
    .then(function(response) {
        console.log(response.data);
        
        // Maneja la respuesta del servidor, si es necesario
    })
    .catch(function(error) {
        console.log(error.response.data);
    });
    });  


</script>
    
@stop
