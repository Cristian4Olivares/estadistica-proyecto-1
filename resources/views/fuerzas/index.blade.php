@extends('adminlte::page')

@section('template_title')
    Fuerza2
@endsection

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                
                <div class="card">
                    <section class="content container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                
                                @includeif('partials.errors')
                
                                <div class="card card-default">
                                    <div class="card-header">
                                        <span class="card-title">{{ __('CREAR NUEVA') }} Fuerza</span>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('fuerzas.store') }}"  role="form" enctype="multipart/form-data">
                                            @csrf
                
                                            @include('fuerzas.form')
                
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            {{-- <span id="card_title">
                                {{ __('Fuerza') }}
                            </span> 

                             <div class="float-right">
                                <a href="{{ route('fuerzas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div> --}}
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    
                    <div class="">
                        <div class="table-responsive">
                            <table id="tblfuerza" class="table table-grey table-striped mt-4">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										{{-- <th>ID</th> --}}
										<th>Tipo de Fuerza</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fuerzas as $fuerza)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											{{-- <td>{{ $fuerza->id }}</td> --}}
											<td>{{ $fuerza->tipo_fuerza }}</td>

                                            <td>
                                                <form action="{{ route('fuerzas.destroy',$fuerza->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('fuerzas.show',$fuerza->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('fuerzas.edit',$fuerza->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {{-- tabla de contenido --}}
                {!! $fuerzas->links() !!}
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
    $(document).ready(function() {
 var table = $('#tblfuerza').DataTable( {
     lengthMenu: [[5, 10, 50, -1], [5, 10, 50, "All"]]
    });
 });
 </script>
@stop
