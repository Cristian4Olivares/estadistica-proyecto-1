<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <div class="box box-info padding-1">
        <div class="box-body">
            {{-- <div class="form-group">
                {{ Form::label('id_emergencia') }}
                {{ Form::text('id_emergencia', $emergenciaGeneral->id_emergencia, ['class' => 'form-control' . ($errors->has('id_emergencia') ? ' is-invalid' : ''), 'placeholder' => 'Id Emergencia']) }}
                {!! $errors->first('id_emergencia', '<div class="invalid-feedback">:message</div>') !!}
            </div> --}}
            <div class="form-group">
                {{ Form::label('Fecha_Registro') }}
                {{ Form::date('Fecha_Registro', $emergenciaGeneral->Fecha_Registro, ['class' => '' . ($errors->has('Fecha_Registro') ? ' is-invalid' : ''),'required value'=>$now->format('Y-m-d'), 'placeholder' => 'Fecha Registro']) }}
                {!! $errors->first('Fecha_Registro', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('paciente_id') }}
                {{ Form::select('paciente_id',$paciente, $emergenciaGeneral->paciente_id, ['class' => 'form-control' . ($errors->has('paciente_id') ? ' is-invalid' : ''), 'placeholder' => 'Paciente Id']) }}
                {!! $errors->first('paciente_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('edad') }}
                {{ Form::text('edad', $emergenciaGeneral->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'edad']) }}
                {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
            </div>
    
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        {{ Form::label('Departamento') }}
                        {{ Form::select('depto_id',$depto, $emergenciaGeneral->depto_id, ['class' => 'form-control' . ($errors->has('depto_id') ? ' is-invalid' : ''),'id' => 'depto','placeholder' => 'Depto Id']) }}
                        {!! $errors->first('depto_id', '<div class="invalid-feedback">:message</div>') !!}
                    </div>

                    <div class="form-group">
                    {{ Form::label('Municipio') }}
                    <select id="municipio" class=form-control >
                        <option value="" selected disabled>---Selecciona un médico---</option>
                     </select>
                    </div>


                    <div class="form-group">
                        {{ Form::label('nombre_colonia') }}
                        {{ Form::text('nombre_colonia', $emergenciaGeneral->nombre_colonia, ['class' => 'form-control' . ($errors->has('nombre_colonia') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Colonia']) }}
                        {!! $errors->first('nombre_colonia', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div> 
    
    
            <div class="card">
                {{-- <div class="card-header">
                    Featured
                </div> --}}
                <div class="card-body">

                    <div class="form-group">
                        {{ Form::label('especialidad_id') }}
                        {{ Form::select('especialidad_id',$medicoespecialidad, $emergenciaGeneral->especialidad_id, ['class' => 'form-control' . ($errors->has('especialidad_id') ? ' is-invalid' : ''),'id' => 'especialidad', 'placeholder' => 'Especialidad Id']) }}
                        {!! $errors->first('especialidad_id', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    
                    <!-- Select de médicos -->
                    
                    {{ Form::label('Medico') }}
                    <select id="medico" class=form-control >
                        <option value="" selected disabled>---Selecciona un médico---</option>
                    </select>
                    
                    <!-- Otros inputs del formulario -->
                    <input type="hidden" name="medico_id" id="medico_idInput" >
                    <!-- Botón de envío del formulario -->
    
                    <div class="form-group">
                        {{ Form::label('Diagnostico') }}
                        {{ Form::text('Diagnostico', $emergenciaGeneral->Diagnostico, ['class' => 'form-control' . ($errors->has('Diagnostico') ? ' is-invalid' : ''), 'placeholder' => 'Diagnostico']) }}
                        {!! $errors->first('Diagnostico', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('turno') }}
                        {{ Form::text('turno', $emergenciaGeneral->turno, ['class' => 'form-control' . ($errors->has('turno') ? ' is-invalid' : ''), 'placeholder' => 'Turno']) }}
                        {!! $errors->first('turno', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </div>  
</body>
</html>

