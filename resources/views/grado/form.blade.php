<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idGrado') }}
            {{ Form::text('idGrado', $grado->idGrado, ['class' => 'form-control' . ($errors->has('idGrado') ? ' is-invalid' : ''), 'placeholder' => 'Idgrado']) }}
            {!! $errors->first('idGrado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_grado') }}
            {{ Form::text('tipo_grado', $grado->tipo_grado, ['class' => 'form-control' . ($errors->has('tipo_grado') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Grado']) }}
            {!! $errors->first('tipo_grado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>