<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	// protected $fillable = ['product_id','avater','background','logo','mockup','branding'];
	protected $guarded = [];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
