<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmergenciaGeneral
 *
 * @property $id_emergencia
 * @property $Fecha_Registro
 * @property $paciente_id
 * @property $depto_id
 * @property $municipio_id
 * @property $nombre_colonia
 * @property $especialidad_id
 * @property $medico_id
 * @property $Diagnostico
 * @property $turno
 * @property $created_at
 * @property $updated_at
 *
 * @property ColoniasHn $coloniasHn
 * @property ColoniasHn $coloniasHn
 * @property DepartamentosHn $departamentosHn
 * @property EspecialidadMedico $especialidadMedico
 * @property Paciente $paciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EmergenciaGeneral extends Model
{
    
    static $rules = [
		'id_emergencia' => 'required',
		'Fecha_Registro' => 'required',
		'paciente_id' => 'required',
		'depto_id' => 'required',
		'municipio_id' => 'required',
		'nombre_colonia' => 'required',
		'especialidad_id' => 'required',
		'medico_id' => 'required',
		'Diagnostico' => 'required',
		'turno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_emergencia','Fecha_Registro','paciente_id','depto_id','municipio_id','nombre_colonia','especialidad_id','medico_id','Diagnostico','turno'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function coloniasHn()
    {
        return $this->hasOne('App\Models\ColoniasHn', 'idColonias', 'medico_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamentosHn()
    {
        return $this->hasOne('App\Models\DepartamentosHn', 'idDeptoHN', 'depto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function especialidadMedico()
    {
        return $this->hasOne('App\Models\EspecialidadMedico', 'idEspecialidadMed', 'especialidad_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id_paciente', 'paciente_id');
    }
    

}
