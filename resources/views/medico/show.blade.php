@extends('adminlte::page')

@section('template_title')

@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Medico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medicos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Iddoctores:</strong>
                            {{ $medico->idDoctores }}
                        </div>
                        <div class="form-group">
                            <strong>Identidad Medico:</strong>
                            {{ $medico->identidad_medico }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Medico:</strong>
                            {{ $medico->nombre_medico }}
                        </div>
                        <div class="form-group">
                            <strong>Celular Medico:</strong>
                            {{ $medico->celular_medico }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Medico:</strong>
                            {{ $medico->estado_medico }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad Id:</strong>
                            {{ $medico->especialidad_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
