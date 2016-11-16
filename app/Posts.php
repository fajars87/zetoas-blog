<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $table    = 'posts';


    public function user()
    {
        return $this->hasOne('App\User', 'id', 'author_id');
    }

    public function cat()
    {
        return $this->hasOne('App\Categories', 'id', 'category_id');
    }
}