<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Genero
 *
 * @property $idGenero
 * @property $tipo_genero
 * @property $created_at
 * @property $updated_at
 *
 * @property Paciente[] $pacientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Genero extends Model
{
    
    static $rules = [
		'idGenero' => 'required',
		'tipo_genero' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idGenero','tipo_genero'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pacientes()
    {
        return $this->hasMany('App\Models\Paciente', 'genero_id', 'idGenero');
    }
    

}
