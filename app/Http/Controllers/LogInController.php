<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
// use Auth;
use Illuminate\Support\Facades\Route;
class LogInController extends Controller
{
      public function LogIn(){
    	return view('LogIn');
    }
     public function postLogIn(Request $request){
     	// echo $request->email;
     	// echo $request->password;
     	// echo Hash::make('1234');

     	if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]) ){
     		// {echo "dang nhap thanh cong";
     		// 	echo Auth::user()->full_name." voi id ". Auth::id();
     		// 	$user=Auth::user();
     		// 	echo $user->full_name;
           
            if((Auth::user()->chucnang==2)||(Auth::user()->chucnang==3))
                return redirect('Admin');
             // if(Auth::user()->chucnang==1)
            else
                 return redirect('HomeMA');
     }
     	else
    		return redirect('LogIn');
    	
     	
    }

  /*  public function HomeUser($id){
    	return view('Home',['user'=>$id]);

    }*/
}
