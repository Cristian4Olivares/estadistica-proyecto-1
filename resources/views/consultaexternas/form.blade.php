<div class="box box-info padding-1">
    <div class="box-body">
        
        {{-- <div class="form-group">
            {{ Form::label('idConsultaExt') }}
            {{ Form::text('idConsultaExt', $consultaexterna->idConsultaExt, ['class' => 'form-control' . ($errors->has('idConsultaExt') ? ' is-invalid' : ''), 'placeholder' => 'Idconsultaext']) }}
            {!! $errors->first('idConsultaExt', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('fechaRegistro') }}
            {{ Form::date('fechaRegistro', $consultaexterna->fechaRegistro, ['class' => 'form-control' . ($errors->has('fechaRegistro') ? ' is-invalid' : ''), 'placeholder' => 'Fecharegistro']) }}
            {!! $errors->first('fechaRegistro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('facturaNumero') }}
            {{ Form::text('facturaNumero', $consultaexterna->facturaNumero, ['class' => 'form-control' . ($errors->has('facturaNumero') ? ' is-invalid' : ''), 'placeholder' => 'Facturanumero']) }}
            {!! $errors->first('facturaNumero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('expediente') }}
            {{ Form::text('expediente', $consultaexterna->expediente, ['class' => 'form-control' . ($errors->has('expediente') ? ' is-invalid' : ''), 'placeholder' => 'Expediente']) }}
            {!! $errors->first('expediente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $consultaexterna->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fuerza_id') }}
            {{ Form::select('fuerza_id',$fuerzas, $consultaexterna->fuerza_id, ['class' => 'form-control' . ($errors->has('fuerza_id') ? ' is-invalid' : ''), 'placeholder' => 'Fuerza Id']) }}
            {!! $errors->first('fuerza_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>