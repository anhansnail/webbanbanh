<?php 

use App\CategoryProducts;
use App\Products;
$CategoryProducts=CategoryProducts::all();
 $Products=Products::all();
 ?>
<div class="row main-left">
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">

                    <li href="#" class="list-group-item active bg-secondary text-white " style="">
                    	Menu
                    </li>
           <!-- list manu -->
           @foreach($CategoryProducts as $CP)
                    <li href="#" class="list-group-item menu1">
                    	{{$CP->name}}
                    </li>
                    <ul>
                        @foreach($CP->Products as $P)
                        <!-- Products là 1 hàm trong model CategoryProducts -->
                		<li class="list-group-item" >
                			<a href="XemSanPham/{{$CP->id}}/{{$P->id}}">{{$P->name}}</a>
                		</li>
                        @endforeach
                		
                    </ul>
            @endforeach
                    
                </ul>
            </div>