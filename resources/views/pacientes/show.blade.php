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
                            <span class="card-title">{{ __('Show') }} Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                         {{-- <div class="form-group">
                            <strong>Id Paciente:</strong>
                            {{ $paciente->id_paciente }}
                        </div>  --}}
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $paciente->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Identidad Paciente:</strong>
                            {{ $paciente->identidad_paciente }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Serie:</strong>
                            {{ $paciente->numero_serie }}
                        </div>
                        <div class="form-group">
                            <strong>Edad Paciente:</strong>
                            {{ $paciente->edad_paciente }}
                        </div>
                        <div class="form-group">
                            <strong>Celular Paciente:</strong>
                            {{ $paciente->celular_paciente }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Paciente:</strong>
                            {{ $paciente->correo_paciente }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Paciente:</strong>
                            {{ $paciente->nombre_paciente }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paciente:</strong>
                            {{ $paciente->apellido_paciente }}
                        </div>
                        <div class="form-group">
                            <strong>Grado Id:</strong>
                            {{ $paciente->grado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fuerza Id:</strong>
                            {{ $paciente->fuerza_id }}
                        </div>
                        <div class="form-group">
                            <strong>Genero Id:</strong>
                            {{ $paciente->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $paciente->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Paciente:</strong>
                            {{ $paciente->estado_paciente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
