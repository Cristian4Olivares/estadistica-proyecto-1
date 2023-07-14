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
          flex-basis: 50%; /* Ajusta el ancho de las columnas según sea necesario */
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
                        
                        </div>

                        <div class="form-column">   
                            <div class="card" >
                                <div class="card-body" >
                                    {{-- Cuadro de medicos funcional --}}

                                            <h1>Listado de médicos por especialidad funcional</h1>
                                       {{--  {{ Form::label('Especilidad') }}
                                        {{ Form::select('nombre_del_campo', $especialidades, ['id'=>'especialidad']) }} --}}

                                        {{-- <select id="especialidad" class=form-control>
                                            <option value="" selected disabled >Selecciona una especialidad</option>
                                            <!-- Llena este select con las especialidades disponibles -->
                                            @foreach ($especialidades as $especialidad)
                                            <option value="{{ $especialidad->idEspecialidadMed }}">{{ $especialidad->tipo_especialidad }}</option>
                                            @endforeach
                                        </select>  --}}
                                        
                                        <div class="form-group">
                                            {{ Form::label('especialidad_id') }}
                                            {{ Form::select('especialidad_id',$medicoespecialidad, $consultaexterna->especialidad_id, ['class' => 'form-control' . ($errors->has('especialidad_id') ? ' is-invalid' : ''),'id' => 'especialidad', 'placeholder' => 'Especialidad Id']) }}
                                            {!! $errors->first('especialidad_id', '<div class="invalid-feedback">:message</div>') !!}
                                        </div>
                                        

                                        <!-- Otros inputs del formulario -->
                                        <input type="hidden" name="especialidad_id" id="especialidad_IdInput" >
                                        <!-- Botón de envío del formulario -->

                                        <!-- Select de médicos -->
                                        
                                        {{ Form::label('Medico') }}
                                        <select id="medico" class=form-control >
                                            <option value="" selected disabled>---Selecciona un médico---</option>
                                        </select>
                                        
                                        <!-- Otros inputs del formulario -->
                                        <input type="hidden" name="medico_id" id="medico_idInput" >
                                        <!-- Botón de envío del formulario -->
                                </div>        
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

