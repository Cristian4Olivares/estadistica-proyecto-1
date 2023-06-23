<div class="box box-info padding-1">
    <div class="box-body">
        
        {{-- <div class="form-group">
            {{ Form::label('idDoctores') }}
            {{ Form::text('idDoctores', $medico->idDoctores, ['class' => 'form-control' . ($errors->has('idDoctores') ? ' is-invalid' : ''), 'placeholder' => 'Iddoctores']) }}
            {!! $errors->first('idDoctores', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('identidad_medico') }}
            {{ Form::text('identidad_medico', $medico->identidad_medico, ['class' => 'form-control' . ($errors->has('identidad_medico') ? ' is-invalid' : ''), 'placeholder' => 'Identidad Medico']) }}
            {!! $errors->first('identidad_medico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_medico') }}
            {{ Form::text('nombre_medico', $medico->nombre_medico, ['class' => 'form-control' . ($errors->has('nombre_medico') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Medico']) }}
            {!! $errors->first('nombre_medico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular_medico') }}
            {{ Form::text('celular_medico', $medico->celular_medico, ['class' => 'form-control' . ($errors->has('celular_medico') ? ' is-invalid' : ''), 'placeholder' => 'Celular Medico']) }}
            {!! $errors->first('celular_medico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado_medico') }}
            {{ Form::text('estado_medico', $medico->estado_medico, ['class' => 'form-control' . ($errors->has('estado_medico') ? ' is-invalid' : ''), 'placeholder' => 'Estado Medico']) }}
            {!! $errors->first('estado_medico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('especialidad_id') }}
            {{ Form::select('especialidad_id',$especialidad_medicos, $medico->especialidad_id, ['class' => 'form-control' . ($errors->has('especialidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Especialidad Id']) }}
            {!! $errors->first('especialidad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>