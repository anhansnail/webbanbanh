<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $timestamps = false;
   	protected $table = "products";

   	  public function CategoryProducts()
    {
        return $this->belongsTo('App\Products');
    }
}
