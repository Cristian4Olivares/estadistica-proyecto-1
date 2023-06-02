<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fuerza
 *
 * @property $id
 * @property $tipo_fuerza
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultaexterna[] $consultaexternas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Fuerza extends Model
{
  protected $primaryKey = 'id'; 
    static $rules = [
		'id' => '',
		'tipo_fuerza' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','tipo_fuerza'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultaexternas()
    {
        return $this->hasMany('App\Models\Consultaexterna', 'fuerza_id','id');
    }
    

}
