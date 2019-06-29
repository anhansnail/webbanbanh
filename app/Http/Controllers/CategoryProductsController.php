<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\CategoryProducts;
class CategoryProductsController extends Controller
{
         
     public function getDanhSach(){
    	$CategoryProducts=CategoryProducts::All();
    	return view('Admin/CategoryProducts/DanhSach',['CategoryProducts'=>$CategoryProducts]);
    }
    public function getThem(){
    	return view('Admin/CategoryProducts/Them');
    }
    public function postThem(Request $request){

    	// echo $request->txtUser;
    	$CategoryProducts = new CategoryProducts;
    	// $CategoryProducts->id= $request->id;
		$CategoryProducts->name=$request->name;
    	$CategoryProducts->description=$request->description;
    	$CategoryProducts->image=$request->image;
    
    
    	$CategoryProducts->save();

    	return Redirect('Admin/CategoryProducts/Them');

    }

    public function getSua($id){
    	$CategoryProducts=CategoryProducts::find($id);
    	return view('Admin/CategoryProducts/Sua',['CategoryProducts'=>$CategoryProducts]);
    }
    public function postSua($id,Request $request){
    	$CategoryProducts=CategoryProducts::find($id);
    	 	$CategoryProducts->name=$request->name;
    	$CategoryProducts->description=$request->description;
    	$CategoryProducts->image=$request->image;
    
    
    	$CategoryProducts->Save();
    	return redirect('Admin/CategoryProducts/DanhSach');
    }
    public function Xoa($id){
    	$Products=CategoryProducts::find($id)->Products;
    	foreach ($Products as $Products) {
    		// echo $Products;
    		$Products->delete();
    //
			}
    	$CategoryProducts=CategoryProducts::find($id);
    	$CategoryProducts->delete();
    	return redirect('Admin/CategoryProducts/DanhSach');
    }
}
