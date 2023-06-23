<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idEspecialidadMed') }}
            {{ Form::text('idEspecialidadMed', $especialidadMedico->idEspecialidadMed, ['class' => 'form-control' . ($errors->has('idEspecialidadMed') ? ' is-invalid' : ''), 'placeholder' => 'Idespecialidadmed']) }}
            {!! $errors->first('idEspecialidadMed', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_especialidad') }}
            {{ Form::text('tipo_especialidad', $especialidadMedico->tipo_especialidad, ['class' => 'form-control' . ($errors->has('tipo_especialidad') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Especialidad']) }}
            {!! $errors->first('tipo_especialidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>