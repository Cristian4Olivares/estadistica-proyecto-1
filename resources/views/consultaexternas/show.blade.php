@extends('adminlte::page')

@section('template_title')
    {{ $consultaexterna->name ?? " __('Show') Consultaexterna" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Consultaexterna</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consultaexternas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idconsultaext:</strong>
                            {{ $consultaexterna->idConsultaExt }}
                        </div>
                        <div class="form-group">
                            <strong>Fecharegistro:</strong>
                            {{ $consultaexterna->fechaRegistro }}
                        </div>
                        <div class="form-group">
                            <strong>Facturanumero:</strong>
                            {{ $consultaexterna->facturaNumero }}
                        </div>
                        <div class="form-group">
                            <strong>Expediente:</strong>
                            {{ $consultaexterna->expediente }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $consultaexterna->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fuerza Id:</strong>
                            {{ $consultaexterna->fuerza_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
