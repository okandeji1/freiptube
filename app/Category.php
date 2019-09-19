<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use uuids;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $incrementing = false;

    protected $fillable = [
        'name'
    ];
}
