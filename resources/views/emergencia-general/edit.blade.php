@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Emergencia General
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Emergencia General</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('emergencia-generals.update', $emergenciaGeneral->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('emergencia-general.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
