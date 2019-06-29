<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    public $timestamps = false;
   	protected $table = "bill_detail";
   	public function Products(){
   		return $this->hasOne('App\Products','id_','id');
   	}
}
