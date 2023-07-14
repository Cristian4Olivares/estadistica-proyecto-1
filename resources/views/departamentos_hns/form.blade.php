<div class="box box-info padding-1">
    <div class="box-body">
        
        {{-- <div class="form-group">
            {{ Form::label('idDeptoHN') }}
            {{ Form::text('idDeptoHN', $departamentosHn->idDeptoHN, ['class' => 'form-control' . ($errors->has('idDeptoHN') ? ' is-invalid' : ''), 'placeholder' => 'Iddeptohn']) }}
            {!! $errors->first('idDeptoHN', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('nombre_depto') }}
            {{ Form::text('nombre_depto', $departamentosHn->nombre_depto, ['class' => 'form-control' . ($errors->has('nombre_depto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Depto']) }}
            {!! $errors->first('nombre_depto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>