<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     /**
      * Set auto-increamenting to false
      *
      * @var bool
      */

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name'
    ];
}
