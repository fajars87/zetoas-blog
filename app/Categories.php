<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $table    = 'categories';

    public function blog_posts()
{
    return $this->hasMany('App\Posts', 'category_id');
}
}
