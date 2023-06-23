<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consultaexterna
 *
 * @property $idConsultaExt
 * @property $fechaRegistro
 * @property $facturaNumero
 * @property $expediente
 * @property $nombre
 * @property $fuerza_id
 * @property $medico_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Fuerza $fuerza
 * @property medico $medico
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consultaexterna extends Model
{
  protected $primaryKey = 'idConsultaExt'; 
    
    static $rules = [
		'idConsultaExt' => '',
		'fechaRegistro' => 'required',
		'facturaNumero' => 'required',
		'expediente' => 'required',
		'nombre' => 'required',
		'fuerza_id' => 'required',
    'medico_id' => '',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idConsultaExt','fechaRegistro','facturaNumero','expediente','nombre','fuerza_id','medico_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function fuerza()
    {
        return $this->hasOne('App\Models\Fuerza', 'id', 'fuerza_id');
    }
    
    public function medico()
    {
        return $this->hasOne('App\Models\Medico', 'idMedicos', 'medicos_id');
    }
}
