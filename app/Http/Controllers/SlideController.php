<?php

namespace App\Http\Controllers;
use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
     public function getDanhSach(){
    	$Slide=Slide::All();
    	return view('Admin/Slide/DanhSach',['Slide'=>$Slide]);
    }
    public function getThem(){
    	return view('Admin/Slide/Them');
    }
    public function postThem(Request $request){

    	// echo $request->txtUser;
    	$Slide = new Slide;
    	// $Slide->id= $request->id;
    	$Slide->link= $request->link;
    	$Slide->image= $request->image;
    	
    	$Slide->save();

    	return Redirect('Admin/Slide/Them');

    }

    public function getSua($id){
    	$Slide=Slide::find($id);
    	return view('Admin/Slide/Sua',['Slide'=>$Slide]);
    }
    public function postSua($id,Request $request){
    	$Slide=Slide::find($id);
    	$Slide->link=$request->link;
    	$Slide->image=$request->image;
    	
    	$Slide->Save();
    	return redirect('Admin/Slide/DanhSach');
    }
    public function Xoa($id){
    	$Slide=Slide::find($id);
    	$Slide->delete();
    	return redirect('Admin/Slide/DanhSach');
    }
}
