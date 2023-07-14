@extends('adminlte::page')

@section('template_title')
    Municipios Hn
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Municipios Hn') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('Municipios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										{{-- <th>Idmunicipioshn</th> --}}
										<th>Nombre Municipio</th>
										<th>Deptos Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($municipiosHns as $municipiosHn)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										    {{-- <td>{{ $municipiosHn->idMunicipiosHN }}</td> --}}
											<td>{{ $municipiosHn->nombre_municipio }}</td>
											<td>{{ $municipiosHn->DepartamentosHn->nombre_depto }}</td>

                                            <td>
                                                <form action="{{ route('Municipios.destroy',$municipiosHn->idMunicipiosHN ) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('Municipios.show',$municipiosHn->idMunicipiosHN ) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('Municipios.edit',$municipiosHn->idMunicipiosHN ) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $municipiosHns->links() !!}
            </div>
        </div>
    </div>
@endsection
