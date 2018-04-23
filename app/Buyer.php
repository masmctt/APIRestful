<?php

namespace App;

use App\Transaction;

class Buyer extends Model
{
    public function transactions()
    {
    	return $this->hasMany(Transaction::class);
    }
}
