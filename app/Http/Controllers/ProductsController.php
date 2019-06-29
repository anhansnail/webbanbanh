<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class ProductsController extends Controller
{
    
     public function getDanhSach(){
    	$Products=Products::All();
    	return view('Admin/Products/DanhSach',['Products'=>$Products]);
    }
    public function getThem(){
    	return view('Admin/Products/Them');
    }
    public function postThem(Request $request){

    	// echo $request->txtUser;
    	$Products = new Products;
    	// $Products->id= $request->id;
		$Products->name=$request->name;
    	$Products->id_type=$request->id_type;
    	$Products->description=$request->description;
    	$Products->unit_price=$request->unit_price;
    	$Products->promotion_price=$request->promotion_price;
    	$Products->image=$request->image;
    	$Products->unit=$request->unit;
    	$Products->new=$request->new;
    	$Products->save();

    	return Redirect('Admin/Products/Them');

    }

    public function getSua($id){
    	$Products=Products::find($id);
    	return view('Admin/Products/Sua',['Products'=>$Products]);
    }
    public function postSua($id,Request $request){
    	$Products=Products::find($id);
    	$Products->name=$request->name;
    	$Products->id_type=$request->id_type;
    	$Products->description=$request->description;
    	$Products->unit_price=$request->unit_price;
    	$Products->promotion_price=$request->promotion_price;
    	$Products->image=$request->image;
    	$Products->unit=$request->unit;
    	$Products->new=$request->new;
    	$Products->Save();
    	return redirect('Admin/Products/DanhSach');
    }
    public function Xoa($id){
    	$Products=Products::find($id);
    	$Products->delete();
    	return redirect('Admin/Products/DanhSach');
    }
          public function getDanhSachSanPham($idCategory){
       
        return view('DanhSachSanPham',['idCategory'=>$idCategory]);
    }

      

}
