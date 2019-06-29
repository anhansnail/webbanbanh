<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XemSanPhamController extends Controller
{
    
    // User xem sản phẩm
    public function getProducts($CP,$P){
        
        return view('XemSanPham',['CP'=>$CP,'P'=>$P]);

    }
}
