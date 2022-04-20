<?php

namespace App;

use App\Product;
use App\Buyer;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'quantity',
        'buyer_id',
        'product_id',
    ];

    public function Buyers(){
        return $this->belongsTo(Buyer::class);
    }

    public function Products(){
        return $this->belongsTo(Product::class);
    }

}
