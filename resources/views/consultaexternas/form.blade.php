<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 <style>
        .form-container {
          display: flex;
          justify-content: space-between;
        }
    
        .form-column {
          flex-basis: 70%; /* Ajusta el ancho de las columnas según sea necesario */
        }
    </style>
</head>
<body>
    <div class="box box-info padding-1">
        <div class="box-body">
            <div class="form-container">
            <div class="form-column">
            
                {{-- <div class="form-group">
                    {{ Form::label('idConsultaExt') }}
                    {{ Form::text('idConsultaExt', $consultaexterna->idConsultaExt, ['class' => 'form-control' . ($errors->has('idConsultaExt') ? ' is-invalid' : ''), 'placeholder' => 'Idconsultaext']) }}
                    {!! $errors->first('idConsultaExt', '<div class="invalid-feedback">:message</div>') !!}
                </div> --}}
                <div class="form-group">
                    {{ Form::label('Fecha de Registro') }}
                    {{ Form::date('fechaRegistro', $consultaexterna->fechaRegistro, ['class' => 'form-control' . ($errors->has('fechaRegistro') ? ' is-invalid' : ''),'required value'=>$now->format('Y-m-d') , 'placeholder' => '']) }}
                    {!! $errors->first('fechaRegistro', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Numero de Factura') }}
                    {{ Form::text('facturaNumero', $consultaexterna->facturaNumero, ['class' => 'form-control' . ($errors->has('facturaNumero') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                    {!! $errors->first('facturaNumero', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('N° Expediente') }}
                    {{ Form::text('expediente', $consultaexterna->expediente, ['class' => 'form-control' . ($errors->has('expediente') ? ' is-invalid' : ''), 'placeholder' => 'Expediente']) }}
                    {!! $errors->first('expediente', '<div class="invalid-feedback">:message</div>') !!}
                </div> 
            </div>
            <P></P>
            <div class="form-column">
                <div class="form-group">
                    {{ Form::label('Nombre del Paciente') }}
                    {{ Form::text('nombre', $consultaexterna->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('Fuerza') }}
                    {{ Form::select('fuerza_id',$fuerzas, $consultaexterna->fuerza_id, ['class' => 'form-control' . ($errors->has('fuerza_id') ? ' is-invalid' : ''), 'placeholder' => '--- Selecione fuerza ---']) }}
                    {!! $errors->first('fuerza_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                
                {{-- Select dinamicos para traer los medicos --}}
                <select class="custom-select mb-1" name="specialty_id" id="specialty_id" onchange="getDoctors()">
                    <option value="0" selected>Seleccione Especialidad</option>
                    {{-- @foreach($specialties as $specialty)
                      <option value="{{ $specialty->id }}">
                          {{ $specialty->descripcion }}
                      </option>
                    @endforeach --}}
                  </select>
                  <select class="custom-select" name="doctor_id" id="doctor_id">
                    <option value="0" selected>Seleccione Profesional</option>
                  {{--   @foreach($doctors as $doctor)
                      <option value="{{ $doctor->id }}">
                          {{ $doctor->apeynom }}
                      </option>
                    @endforeach --}}
                  </select>
                
                <div class="form-group">
                    {{ Form::label('Medico') }}
                    {{ Form::select('fuerza_id',$medicos, $consultaexterna->medico_id, ['class' => 'form-control' . ($errors->has('fuerza_id') ? ' is-invalid' : ''), 'placeholder' => '--- Selecione fuerza ---']) }}
                    {!! $errors->first('fuerza_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </div>
    </div>
</body>
</html>

