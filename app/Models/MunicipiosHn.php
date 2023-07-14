<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MunicipiosHn
 *
 * @property $idMunicipiosHN
 * @property $nombre_municipio
 * @property $deptos_id
 * @property $created_at
 * @property $updated_at
 *
 * @property DepartamentosHn $departamentosHn
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MunicipiosHn extends Model
{
  
  protected $primaryKey = 'idMunicipiosHN'; 
    static $rules = [
		'idMunicipiosHN' => '',
		'nombre_municipio' => 'required',
		'deptos_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idMunicipiosHN','nombre_municipio','deptos_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamentosHn()
    {
        return $this->hasOne('App\Models\DepartamentosHn', 'idDeptoHN', 'deptos_id');
    }
    

}
