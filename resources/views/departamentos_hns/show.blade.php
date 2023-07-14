@extends('adminlte::page')

@section('template_title')
    {{ $departamentosHn->name ?? "{{ __('Show') Departamentos Hn" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Departamentos Hn</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('DepartamentosHn.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Iddeptohn:</strong>
                            {{ $departamentosHn->idDeptoHN }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Depto:</strong>
                            {{ $departamentosHn->nombre_depto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
