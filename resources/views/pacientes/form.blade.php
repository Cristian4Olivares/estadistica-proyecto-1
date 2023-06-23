<div class="box box-info padding-1">
    <div class="box-body">
        
        {{-- <div class="form-group">
            {{ Form::label('id_paciente') }}
            {{ Form::text('id_paciente', $paciente->id_paciente, ['class' => '' . ($errors->has('id_paciente') ? ' is-invalid' : ''), 'placeholder' => 'Id Paciente']) }}
            {!! $errors->first('id_paciente', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('fecha_nacimiento') }}
            {{ Form::date('fecha_nacimiento', $paciente->fecha_nacimiento, ['class' => '' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('identidad_paciente') }}
            {{ Form::text('identidad_paciente', $paciente->identidad_paciente, ['class' => '' . ($errors->has('identidad_paciente') ? ' is-invalid' : ''), 'placeholder' => 'Identidad Paciente']) }}
            {!! $errors->first('identidad_paciente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_serie') }}
            {{ Form::text('numero_serie', $paciente->numero_serie, ['class' => '' . ($errors->has('numero_serie') ? ' is-invalid' : ''), 'placeholder' => 'Numero Serie']) }}
            {!! $errors->first('numero_serie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edad_paciente') }}
            {{ Form::text('edad_paciente', $paciente->edad_paciente, ['class' => '' . ($errors->has('edad_paciente') ? ' is-invalid' : ''), 'placeholder' => 'Edad Paciente']) }}
            {!! $errors->first('edad_paciente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular_paciente') }}
            {{ Form::text('celular_paciente', $paciente->celular_paciente, ['class' => '' . ($errors->has('celular_paciente') ? ' is-invalid' : ''), 'placeholder' => 'Celular Paciente']) }}
            {!! $errors->first('celular_paciente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo_paciente') }}
            {{ Form::text('correo_paciente', $paciente->correo_paciente, ['class' => '' . ($errors->has('correo_paciente') ? ' is-invalid' : ''), 'placeholder' => 'Correo Paciente']) }}
            {!! $errors->first('correo_paciente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_paciente') }}
            {{ Form::text('nombre_paciente', $paciente->nombre_paciente, ['class' => '' . ($errors->has('nombre_paciente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Paciente']) }}
            {!! $errors->first('nombre_paciente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_paciente') }}
            {{ Form::text('apellido_paciente', $paciente->apellido_paciente, ['class' => '' . ($errors->has('apellido_paciente') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Paciente']) }}
            {!! $errors->first('apellido_paciente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grado_id') }}
            {{ Form::select('grado_id',$grados, $paciente->grado_id, ['class' => '' . ($errors->has('grado_id') ? ' is-invalid' : ''), 'placeholder' => 'Grado Id']) }}
            {!! $errors->first('grado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fuerza_id') }}
            {{ Form::select('fuerza_id',$fuerzas, $paciente->fuerza_id, ['class' => '' . ($errors->has('fuerza_id') ? ' is-invalid' : ''), 'placeholder' => 'Fuerza Id']) }}
            {!! $errors->first('fuerza_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero_id') }}
            {{ Form::select('genero_id',$generos, $paciente->genero_id, ['class' => '' . ($errors->has('genero_id') ? ' is-invalid' : ''), 'placeholder' => 'Genero Id']) }}
            {!! $errors->first('genero_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria_id') }}
            {{ Form::select('categoria_id',$categorias,$paciente->categoria_id, ['class' => '' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado_paciente') }}
            {{ Form::text('estado_paciente', $paciente->estado_paciente, ['class' => '' . ($errors->has('estado_paciente') ? ' is-invalid' : ''), 'placeholder' => 'Estado Paciente']) }}
            {!! $errors->first('estado_paciente', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>