<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProducts extends Model
{
    // public $timestamps = false;
   	protected $table = "type_products";

   	public function Products(){
   		return $this->hasMany('App\Products','id_type','id');
   	}
}
