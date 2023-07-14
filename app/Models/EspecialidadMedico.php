<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EspecialidadMedico
 *
 * @property $idEspecialidadMed
 * @property $tipo_especialidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Medico[] $medicos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EspecialidadMedico extends Model
{
  protected $primaryKey = 'idEspecialidadMed'; 
    static $rules = [
		'idEspecialidadMed' => '',
		'tipo_especialidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEspecialidadMed','tipo_especialidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicos()
    {
       return $this->hasMany('App\Models\Medico', 'especialidad_id', 'idEspecialidadMed');
        //return $this->hasMany(Medico::class);
    }
    

}
