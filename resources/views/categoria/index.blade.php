@extends('adminlte::page')

@section('template_title')
    Categoria
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                    <table>
                        <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <DIV class="card">
                                <div class="card">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">

                                        {{-- <span id="card_title">
                                            {{ __('Categoria') }}
                                        </span> --}}

                                        {{-- <div class="float-right">
                                            <a href="{{ route('categorias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                            {{ __('Create New') }}
                                            </a>
                                        </div> --}}
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
                                                    <span class="card-title">{{ __('Create') }} Categoria</span>
                                                </div>
                                                <div class="card-body">
                                                    <form method="POST" action="{{ route('categorias.store') }}"  role="form" enctype="multipart/form-data">
                                                        @csrf
                            
                                                        @include('categoria.form')
                            
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </DIV>
                            </td>
                            {{-- APARTADO DE LA IZQUIERDA DONDE SE MUESTRA LA TABLA CON LOS DATOS GUARDADOS --}}
                            <td>
                                <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="categoria" class="table table-striped table-hover" style="margin-left:auto;margin-right:auto;">
                                            <thead class="thead">
                                                <tr>
                                                    <th>No</th>
                                                    
                                                    <th>Nombre Categoria</th>

                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categorias as $categoria)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        
                                                        <td>{{ $categoria->nombre_categoria }}</td>

                                                        <td>
                                                            <form action="{{ route('categorias.destroy',$categoria->id) }}" method="POST">
                                                                <a class="btn btn-sm btn-primary " href="{{ route('categorias.show',$categoria->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                                <a class="btn btn-sm btn-success" href="{{ route('categorias.edit',$categoria->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                {!! $categorias->links() !!}
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
            text-align:center;
        }
    </style>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>


   
    @vite(['resources/css/app.css', 'resources/js/app.js'])
 <script>
       $(document).ready(function() {
    var table = $('#categoria').DataTable( {
        lengthMenu: [[5, 10, 50, -1], [5, 10, 50, "All"]]
       });
    });
    </script> 
@stop
