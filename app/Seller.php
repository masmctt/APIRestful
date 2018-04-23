<?php

namespace App;

use App\Product;

class Seller extends user
{
    public function FunctionName()
    {
    	return $this->hasMany(Product::class);
    }
}
