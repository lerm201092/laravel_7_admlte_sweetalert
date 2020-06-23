<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
      /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'areas';

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
    protected $fillable = [ 'padre', 'codarea', 'nomarea', 'id_tipo'];
}
