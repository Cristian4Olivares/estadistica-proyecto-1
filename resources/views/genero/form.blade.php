<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idGenero') }}
            {{ Form::text('idGenero', $genero->idGenero, ['class' => 'form-control' . ($errors->has('idGenero') ? ' is-invalid' : ''), 'placeholder' => 'Idgenero']) }}
            {!! $errors->first('idGenero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_genero') }}
            {{ Form::text('tipo_genero', $genero->tipo_genero, ['class' => 'form-control' . ($errors->has('tipo_genero') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Genero']) }}
            {!! $errors->first('tipo_genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>