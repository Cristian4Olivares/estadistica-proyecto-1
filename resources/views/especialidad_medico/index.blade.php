@extends('adminlte::page')

@section('template_title')
    Especialidad Medico
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Especialidad Medico') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('especialidad-medicos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Idespecialidadmed</th>
										<th>Tipo Especialidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($especialidadMedicos as $especialidadMedico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $especialidadMedico->idEspecialidadMed }}</td>
											<td>{{ $especialidadMedico->tipo_especialidad }}</td>

                                            <td>
                                                <form action="{{ route('especialidad-medicos.destroy',$especialidadMedico->idEspecialidadMed ) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('especialidad-medicos.show',$especialidadMedico->idEspecialidadMed ) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('especialidad-medicos.edit',$especialidadMedico->idEspecialidadMed ) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $especialidadMedicos->links() !!}
            </div>
        </div>
    </div>
@endsection
