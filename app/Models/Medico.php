<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medico
 *
 * @property $idMedicos
 * @property $identidad_medico
 * @property $nombre_medico
 * @property $celular_medico
 * @property $estado_medico
 * @property $especialidad_id
 * @property $created_at
 * @property $updated_at
 *
 * @property EspecialidadMedico $especialidadMedico
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medico extends Model
{
  protected $primaryKey = 'idMedicos'; 
    static $rules = [
		'idMedicos' => '',
		'identidad_medico' => 'required',
		'nombre_medico' => 'required',
		'celular_medico' => 'required',
		'estado_medico' => 'required',
		'especialidad_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idMedicos','identidad_medico','nombre_medico','celular_medico','estado_medico','especialidad_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function especialidadMedico()
    {
        return $this->hasOne('App\Models\EspecialidadMedico', 'idEspecialidadMed', 'especialidad_id');
        return $this->belongsTo(EspecialidadMedico::class);
    }
    

}
