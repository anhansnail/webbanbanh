<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
class CustomerController extends Controller
{
       
     public function getDanhSach(){
    	$Customer=Customer::All();
    	return view('Admin/Customer/DanhSach',['Customer'=>$Customer]);
    }
    public function getThem(){
    	return view('Admin/Customer/Them');
    }
    public function postThem(Request $request){

    	// echo $request->txtUser;
    	$Customer = new Customer;
    	// $Customer->id= $request->id;
		$Customer->name=$request->name;
    	$Customer->gender=$request->gender;
    	$Customer->email=$request->email;
    	$Customer->address=$request->address;
    	$Customer->phone_number=$request->phone_number;
    	$Customer->note=$request->note;
    
    	$Customer->save();

    	return Redirect('Admin/Customer/Them');

    }

    public function getSua($id){
    	$Customer=Customer::find($id);
    	return view('Admin/Customer/Sua',['Customer'=>$Customer]);
    }
    public function postSua($id,Request $request){
    	$Customer=Customer::find($id);
    	   $Customer->name=$request->name;
        $Customer->gender=$request->gender;
        $Customer->email=$request->email;
        $Customer->address=$request->address;
        $Customer->phone_number=$request->phone_number;
        $Customer->note=$request->note;
    	$Customer->Save();
    	return redirect('Admin/Customer/DanhSach');
    }
    public function Xoa($id){
    	$Customer=Customer::find($id);
    	$Customer->delete();
    	return redirect('Admin/Customer/DanhSach');
    }
}
