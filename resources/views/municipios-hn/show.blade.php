@extends('adminlte::page')

@section('template_title')
    {{ $municipiosHn->name ?? "{{ __('Show') Municipios Hn" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Municipios Hn</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('DepartamentosHn.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idmunicipioshn:</strong>
                            {{ $municipiosHn->idMunicipiosHN }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Municipio:</strong>
                            {{ $municipiosHn->nombre_municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Deptos Id:</strong>
                            {{ $municipiosHn->DepartamentosHn->nombre_depto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
