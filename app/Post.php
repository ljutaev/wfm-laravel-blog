<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
	use Sluggable;

    public function tags()
    {
    	$this->belongsToMany(Tag::class)
    }

    public function category()
    {
    	$this->belongsTo(Category::class)
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
