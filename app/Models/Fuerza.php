<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fuerza
 *
 * @property $idFuerza
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
    
    static $rules = [
		'idFuerza' => '',
		'tipo_fuerza' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_fuerza','idFuerza'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultaexternas()
    {
        return $this->hasMany('App\Models\Consultaexterna', 'fuerza_id','idFuerza');
    }
    

}
