@extends('adminlte::page')

@section('template_title')
    {{ $emergenciaGeneral->name ?? "{{ __('Show') Emergencia General" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Emergencia General</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('emergencia-generals.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Emergencia:</strong>
                            {{ $emergenciaGeneral->id_emergencia }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Registro:</strong>
                            {{ $emergenciaGeneral->Fecha_Registro }}
                        </div>
                        <div class="form-group">
                            <strong>Paciente Id:</strong>
                            {{ $emergenciaGeneral->paciente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Depto Id:</strong>
                            {{ $emergenciaGeneral->depto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio Id:</strong>
                            {{ $emergenciaGeneral->municipio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Colonia:</strong>
                            {{ $emergenciaGeneral->nombre_colonia }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad Id:</strong>
                            {{ $emergenciaGeneral->especialidad_id }}
                        </div>
                        <div class="form-group">
                            <strong>Medico Id:</strong>
                            {{ $emergenciaGeneral->medico_id }}
                        </div>
                        <div class="form-group">
                            <strong>Diagnostico:</strong>
                            {{ $emergenciaGeneral->Diagnostico }}
                        </div>
                        <div class="form-group">
                            <strong>Turno:</strong>
                            {{ $emergenciaGeneral->turno }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
