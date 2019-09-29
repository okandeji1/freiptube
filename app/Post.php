<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Uuids;

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
        'title', 'user_id', 'category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this - belongsTo(Category::class, 'category_id');
    }
}
