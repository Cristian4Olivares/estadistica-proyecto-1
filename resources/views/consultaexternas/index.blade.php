@extends('adminlte::page')

@section('template_title')
    Consulta Externa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h1>{{ __('Consulta Externa') }}</h1>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('consultaexternas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                    <section class="content container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                
                                @includeif('partials.errors')
                
                                <div class="card card-default">
                                    <div class="card-header">
                                        <span class="card-title">{{ __('Create') }} Consulta externa</span>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('consultaexternas.store') }}"  role="form" enctype="multipart/form-data">
                                            @csrf
                
                                            @include('consultaexternas.form')
                
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="endoscopiatbl" class="table table-blue table-striped mt-4">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										{{-- <th>Idconsultaext</th> --}}
										<th>Fecharegistro</th>
										<th>Facturanumero</th>
										<th>Expediente</th>
										<th>Nombre</th>
										<th>Fuerza Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consultaexternas as $consultaexterna)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											{{-- <td>{{ $consultaexterna->idConsultaExt }}</td> --}}
											<td>{{ $consultaexterna->fechaRegistro }}</td>
											<td>{{ $consultaexterna->facturaNumero }}</td>
											<td>{{ $consultaexterna->expediente }}</td>
											<td>{{ $consultaexterna->nombre }}</td>
											<td>{{ $consultaexterna->fuerza->tipo_fuerza}}</td>

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

                </div>
                {!! $consultaexternas->links() !!}
            </div>
        </div>
    </div>
@endsection

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
