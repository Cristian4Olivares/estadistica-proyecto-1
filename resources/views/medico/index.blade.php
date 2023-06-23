@extends('adminlte::page')

@section('template_title')
    Medico
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Medico') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('medicos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Iddoctores</th>
										<th>Identidad Medico</th>
										<th>Nombre Medico</th>
										<th>Celular Medico</th>
										<th>Estado Medico</th>
										<th>Especialidad Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($medicos as $medico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $medico->idDoctores }}</td>
											<td>{{ $medico->identidad_medico }}</td>
											<td>{{ $medico->nombre_medico }}</td>
											<td>{{ $medico->celular_medico }}</td>
											<td>{{ $medico->estado_medico }}</td>
											<td>{{ $medico->EspecialidadMedico->tipo_especialidad }}</td> 

                                            <td>
                                                <form action="{{ route('medicos.destroy',$medico->idMedicos) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('medicos.show',$medico->idMedicos) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('medicos.edit',$medico->idMedicos) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $medicos->links() !!}
            </div>
        </div>
    </div>
@endsection
