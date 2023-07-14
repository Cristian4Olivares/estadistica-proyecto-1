<div class="box box-info padding-1">
    <div class="box-body">
        
        {{-- <div class="form-group">
            {{ Form::label('idMunicipiosHN') }}
            {{ Form::text('idMunicipiosHN', $municipiosHn->idMunicipiosHN, ['class' => 'form-control' . ($errors->has('idMunicipiosHN') ? ' is-invalid' : ''), 'placeholder' => 'Idmunicipioshn']) }}
            {!! $errors->first('idMunicipiosHN', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('nombre_municipio') }}
            {{ Form::text('nombre_municipio', $municipiosHn->nombre_municipio, ['class' => 'form-control' . ($errors->has('nombre_municipio') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Municipio']) }}
            {!! $errors->first('nombre_municipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deptos_id') }}
            {{ Form::select('deptos_id',$depto, $municipiosHn->deptos_id, ['class' => 'form-control' . ($errors->has('deptos_id') ? ' is-invalid' : ''), 'placeholder' => 'Deptos Id']) }}
            {!! $errors->first('deptos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>