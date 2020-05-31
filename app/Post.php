<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     /**
      * Set auto-increamenting to false
      *
      * @var bool
      */

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'uuid', 'title', 'description', 'video', 'user_id', 'category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this-> belongsTo(Category::class, 'category_id');
    }
}
