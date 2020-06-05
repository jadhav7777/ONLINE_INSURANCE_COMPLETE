<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    
   

     public function posts()                        //here we can access like tag->posts
                                                    // this will comes here same as in Post model
    {
    	return $this->belongsToMany('App\Post');
    }
}
