<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DepartamentosHn
 *
 * @property $idDeptoHN
 * @property $nombre_depto
 * @property $created_at
 * @property $updated_at
 *
 * @property MunicipiosHn[] $municipiosHns
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DepartamentosHn extends Model
{
  protected $primaryKey = 'idDeptoHN'; 
    static $rules = [
		'idDeptoHN' => '',
		'nombre_depto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idDeptoHN','nombre_depto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function municipiosHns()
    {
        return $this->hasMany('App\Models\MunicipiosHn', 'deptos_id', 'idDeptoHN');
    }
    

}
