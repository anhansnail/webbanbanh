<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Users;
class UsersController extends Controller
{
    public function getDanhSach(){
    	$Users=Users::All();
    	return view('Admin/Users/DanhSach',['Users'=>$Users]);
    }
    public function getThem(){
    	return view('Admin/Users/Them');
    }
    public function postThem(Request $request){

    	// echo $request->txtUser;
    	$Users = new Users;
    	// $Users->id= $request->id;
    	$Users->full_name= $request->full_name;
    	$Users->email= $request->email;
        // mã hóa mật khẩu
    	$Users->password=bcrypt($request->password) ;
    	$Users->password=bcrypt($request->repassword) ;
    	$Users->phone= $request->phone;
    	$Users->address= $request->address;
        $Users->chucnang=$request->rdoLevel;
		// lưu user
    	$Users->save();

    	return Redirect('Admin/Users/Them');

    }

    public function getSua($id){
    	$Users=Users::find($id);
    	return view('Admin/Users/Sua',['Users'=>$Users]);
    }
    public function postSua($id,Request $request){
    	$Users=Users::find($id);
    	$Users->email=$request->email;
    	$Users->full_name=$request->full_name;
    	$Users->password=$request->password;
    	$Users->phone=$request->phone;
    	$Users->address=$request->address;
    	$Users->Save();
    	return redirect('Admin/Users/DanhSach');
    }
    public function Xoa($id){
    	$Users=Users::find($id);
    	$Users->delete();
    	return redirect('Admin/Users/DanhSach');
    }


    //account
     public function Account(){
        return view('Account');
    }

}
