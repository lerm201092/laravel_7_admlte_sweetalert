<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profesiones extends Model
{
      /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profesion';

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
    protected $fillable = ['id', 'descripcion', 'estado'];
}
