@extends('adminlte::page')

@section('template_title')
    {{ $fuerza->name ?? "{{ __('Show') Fuerza" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Fuerza</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('fuerzas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idfuerza:</strong>
                            {{ $fuerza->id }}
                        </div>
                        <div class="form-group">
                            <strong>tipo_fuerza:</strong>
                            {{ $fuerza->tipo_fuerza }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
