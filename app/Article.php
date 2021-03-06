<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Article extends Model {

    use Sluggable;

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $table = "articles";
    protected $fillabe = ['title', 'content', 'category_id', 'user_id'];

    public function category(){

        return $this->belongsTo('App\Category');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }

    public function images(){

        return $this->hasMany('App\Image');

    }


    public function tags(){

        return $this->belongsToMany('App\Tag');
    }

}
