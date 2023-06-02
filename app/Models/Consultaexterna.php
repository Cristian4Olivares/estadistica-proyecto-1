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
 * @property $created_at
 * @property $updated_at
 *
 * @property Fuerza $fuerza
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
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idConsultaExt','fechaRegistro','facturaNumero','expediente','nombre','fuerza_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function fuerza()
    {
        return $this->hasOne('App\Models\Fuerza', 'id', 'fuerza_id');
    }
    

}
