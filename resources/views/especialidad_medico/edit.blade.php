@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Especialidad Medico
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Especialidad Medico</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('especialidad-medicos.update', $especialidadMedico->idEspecialidadMed ) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('especialidad_medico.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
