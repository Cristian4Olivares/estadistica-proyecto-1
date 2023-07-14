@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Municipios Hn
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Municipios Hn</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('Municipios.update', $municipiosHn->idMunicipiosHN ) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('municipios-hn.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
