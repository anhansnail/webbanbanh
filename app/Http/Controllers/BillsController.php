<?php

namespace App\Http\Controllers;
use App\Bills;
use Illuminate\Http\Request;

class BillsController extends Controller
{
      
     public function getDanhSach(){
    	$Bills=Bills::All();
    	return view('Admin/Bills/DanhSach',['Bills'=>$Bills]);
    }
    public function getThem(){
    	return view('Admin/Bills/Them');
    }
    public function postThem(Request $request){

    	// echo $request->txtUser;
    	$Bills = new Bills;
    	// $Bills->id= $request->id;
		$Bills->name=$request->name;
    	$Bills->id_type=$request->id_type;
    	$Bills->description=$request->description;
    	$Bills->unit_price=$request->unit_price;
    	$Bills->promotion_price=$request->promotion_price;
    	$Bills->image=$request->image;
    	$Bills->unit=$request->unit;
    	$Bills->new=$request->new;
    	$Bills->save();

    	return Redirect('Admin/Bills/Them');

    }

    public function getSua($id){
    	$Bills=Bills::find($id);
    	return view('Admin/Bills/Sua',['Bills'=>$Bills]);
    }
    public function postSua($id,Request $request){
    	$Bills=Bills::find($id);
    	$Bills->name=$request->name;
    	$Bills->id_type=$request->id_type;
    	$Bills->description=$request->description;
    	$Bills->unit_price=$request->unit_price;
    	$Bills->promotion_price=$request->promotion_price;
    	$Bills->image=$request->image;
    	$Bills->unit=$request->unit;
    	$Bills->new=$request->new;
    	$Bills->Save();
    	return redirect('Admin/Bills/DanhSach');
    }
    public function Xoa($id){
    	$Bills=Bills::find($id);
    	$Bills->delete();
    	return redirect('Admin/Bills/DanhSach');
    }
}
