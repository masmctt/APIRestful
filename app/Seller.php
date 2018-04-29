<?php

namespace App;

use App\Product;
use App\Scopes\SellerScope;


class Seller extends user
{
	protected static function boot()
	{
		parent::boot();
		static::addGlobalScope(new SellerScope);
	}

    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
