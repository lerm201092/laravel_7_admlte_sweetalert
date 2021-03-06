<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
      /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'citas';

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
    protected $fillable = [ 'id_paciente', 'id_medico', 'id_empresa', 'resumen', 'descripcion', 'fecha', 'estado' ];
}
