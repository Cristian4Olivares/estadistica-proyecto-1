<div class="box box-info padding-1">
    <div class="box-body">
        
        {{-- <div class="form-group">
            {{ Form::label('idFuerza') }}
            {{ Form::text('idFuerza', $fuerza->idFuerza, ['class' => 'form-control' . ($errors->has('idFuerza') ? ' is-invalid' : ''), 'placeholder' => 'Idfuerza']) }}
            {!! $errors->first('idFuerza', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('tipoFuerza') }}
            {{ Form::text('tipo_fuerza', $fuerza->tipo_fuerza, ['class' => 'form-control' . ($errors->has('tipoFuerza') ? ' is-invalid' : ''), 'placeholder' => 'Tipofuerza']) }}
            {!! $errors->first('tipo_fuerza', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>