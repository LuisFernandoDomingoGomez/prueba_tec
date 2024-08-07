<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $name
 * @property $empresa_id
 * @property $genero
 * @property $fecha_nac
 * @property $curp
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'empresa_id', 'genero', 'fecha_nac', 'curp', 'telefono', 'sueldo_diario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empresa()
    {
        return $this->belongsTo(\App\Models\Empresa::class, 'empresa_id', 'id');
    }
    

}
