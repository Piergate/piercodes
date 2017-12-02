<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	    protected $guarded = [];

    public function image()
    {
    	return $this->hasOne(Image::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
