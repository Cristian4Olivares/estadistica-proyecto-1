@extends('adminlte::page')

@section('template_title')

@endsection

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header">
                            <span class="card-title">{{ __('FOMULARIO') }} CONSULTA EXTERNA</span>
                        </div>
                        
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                             {{-- <div class="float-right">
                                <a href="{{ route('consultaexternas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    {{-- <div class="card-header">
                                        <span class="card-title">{{ __('FOMULARIO') }} CONSULTA EXTERNA</span>
                                    </div> --}}
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('consultaexternas.store') }}"  role="form" enctype="multipart/form-data">
                                            @csrf
                
                                            @include('consultaexternas.form')
                
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </section>

                    <section  >
                        <div  class="card">
                            <div class="table-responsive" >
                                <table id="consultaext" class="table-active table-striped  mt-1" style="margin-left:auto;margin-right:auto;">

                                    <thead class="bg-primary text-white" >
                                        <tr >
                                            <th>No</th>
                                            {{-- <th>Idconsultaext</th> --}}
                                            <th>Fecharegistro</th>
                                            <th >Facturanumero</th>
                                            <th>Expediente</th>
                                            <th>Nombre</th>
                                            <th>Fuerza</th>
                                            <th>categoria</th>
                                            <th>grado</th>
    
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach ($consultaexternas as $consultaexterna)
                                            <tr>
                                                
                                                <td>{{ ++$i }}</td>
                                                
                                                {{-- <td>{{ $consultaexterna->idConsultaExt }}</td> --}}
                                                <td>{{ $consultaexterna->fechaRegistro }}</td>
                                                <td>{{ $consultaexterna->facturaNumero }}</td>
                                                <td>{{ $consultaexterna->expediente }}</td>
                                                <td>{{ $consultaexterna->nombre }}</td>
                                                <td>{{ $consultaexterna->fuerza->tipo_fuerza}}</td>
                                                <td>werrew</td>
                                                <td>---</td>
    
                                                <td>
                                                    <form action="{{ route('consultaexternas.destroy',$consultaexterna->idConsultaExt) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('consultaexternas.show',$consultaexterna->idConsultaExt) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('consultaexternas.edit',$consultaexterna->idConsultaExt) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                        <p></p>
                    </section>
                </div>
                {!! $consultaexternas->links() !!}
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
        var doctors = document.getElementById("doctor_id");
        for (let i = doctors.options.length; i >= 0; i--) {
        doctors.remove(i);
        }
        var id = document.getElementById('specialty_id').value;
        axios.post('/getDoctors/'+id)
        .then((resp)=>{
            var doctors = document.getElementById("doctor_id");
            for (i = 0; i < Object.keys(resp.data).length; i++) {
            var option = document.createElement('option');
            option.value = resp.data[i].id;
            option.text = resp.data[i].apeynom;
            doctors.appendChild(option);
            }
        })
        .catch(function (error) {console.log(error);})
    </script>
@stop
