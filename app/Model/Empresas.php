<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
      /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'empresas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nit', 'nombre', 'id_area', 'direccion', 'email', 'telefono', 'contacto', 'estado'];
}
