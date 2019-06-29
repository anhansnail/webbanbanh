<?php

namespace App\Http\Controllers;
use App\Products;
use App\CategoryProducts;
use App\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   function __Contruct(){
    	$Slide=Slide::all();
    	$Products=Products::all();
    	$CategoryProducts=CategoryProducts::all();
    	view()->share('CategoryProducts',$CategoryProducts);
    	view()->share('Slide',$Slide);

    }
   	public function HomeMA(){


    	return view('Home');
    }

    
}
