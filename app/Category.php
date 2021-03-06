<?php

namespace App;

use App\Category;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function Products(){
        return $this->belongsToMany(Product::class);
    }
}
