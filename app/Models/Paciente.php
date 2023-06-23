<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id_paciente
 * @property $fecha_nacimiento
 * @property $identidad_paciente
 * @property $numero_serie
 * @property $edad_paciente
 * @property $celular_paciente
 * @property $correo_paciente
 * @property $nombre_paciente
 * @property $apellido_paciente
 * @property $grado_id
 * @property $fuerza_id
 * @property $genero_id
 * @property $categoria_id
 * @property $estado_paciente
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Fuerza $fuerza
 * @property Genero $genero
 * @property Grado $grado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    protected $primaryKey = 'id_paciente'; 
    static $rules = [
		'id_paciente' => '',
		'fecha_nacimiento' => 'required',
		'identidad_paciente' => 'required',
		'numero_serie' => 'required',
		'edad_paciente' => 'required',
		'celular_paciente' => 'required',
		'correo_paciente' => 'required',
		'nombre_paciente' => 'required',
		'apellido_paciente' => 'required',
		'grado_id' => 'required',
		'fuerza_id' => 'required',
		'genero_id' => 'required',
		'categoria_id' => 'required',
		'estado_paciente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_paciente','fecha_nacimiento','identidad_paciente','numero_serie','edad_paciente','celular_paciente','correo_paciente','nombre_paciente','apellido_paciente','grado_id','fuerza_id','genero_id','categoria_id','estado_paciente'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function fuerza()
    {
        return $this->hasOne('App\Models\Fuerza', 'id', 'fuerza_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genero()
    {
        return $this->hasOne('App\Models\Genero', 'idGenero', 'genero_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grado()
    {
        return $this->hasOne('App\Models\Grado', 'idGrado', 'grado_id');
    }
    

}
