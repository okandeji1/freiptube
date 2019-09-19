<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use uuids;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $incrementing = false;

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
