<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class NewsController extends Controller
{
       
     public function getDanhSach(){
    	$News=News::All();
    	return view('Admin/News/DanhSach',['News'=>$News]);
    }
    public function getThem(){
    	return view('Admin/News/Them');
    }
    public function postThem(Request $request){

    	// echo $request->txtUser;
    	$News = new News;
    	// $News->id= $request->id;
		$News->name=$request->name;
    	$News->id_type=$request->id_type;
    	$News->description=$request->description;
    	$News->unit_price=$request->unit_price;
    	$News->promotion_price=$request->promotion_price;
    	$News->image=$request->image;
    	$News->unit=$request->unit;
    	$News->new=$request->new;
    	$News->save();

    	return Redirect('Admin/News/Them');

    }

    public function getSua($id){
    	$News=News::find($id);
    	return view('Admin/News/Sua',['News'=>$News]);
    }
    public function postSua($id,Request $request){
    	$News=News::find($id);
    	$News->name=$request->name;
    	$News->id_type=$request->id_type;
    	$News->description=$request->description;
    	$News->unit_price=$request->unit_price;
    	$News->promotion_price=$request->promotion_price;
    	$News->image=$request->image;
    	$News->unit=$request->unit;
    	$News->new=$request->new;
    	$News->Save();
    	return redirect('Admin/News/DanhSach');
    }
    public function Xoa($id){
    	$News=News::find($id);
    	$News->delete();
    	return redirect('Admin/News/DanhSach');
    }
}
