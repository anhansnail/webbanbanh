@extends('Layout.Index')
@section('Content')

  <!-- Page Content -->
    <div class="container">

<?php 
use App\Slide;
use App\CategoryProducts;
use App\Products;
$CategoryProducts=CategoryProducts::all();

$Slide=Slide::all();
 ?>
    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                	<?php $i=0 ?>
                	@foreach($Slide as $S) 
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" 
                        @if($i==0)
                         class="active"
                         @endif>
                        	
                        </li>
                      
                    </ol>
                    <?php $i++;  ?>
                    @endforeach
                    <div class="carousel-inner">
                    	<?php $i=0;?>
                    	@foreach($Slide as $S)
                        <div @if($i==0) 
                        		class="item active"
                        	 @else

                        		class="item"

                        	@endif
                        		>
                            <img  class="slide-image" src="images/slide/{{$S->image}}" alt="">
                        </div>
                        <?php $i++; ?>
                       @endforeach
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>


       @include('Layout.Menu')

            <div class="col-md-9">
	            <div class="panel panel-default">            
	           <!--  	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Laravel Tin Tức</h2>
	            	</div>
 -->
	            <!-- Thong tin tom tat noi bat -->

	            	<div class="panel-body">
	            	@foreach($CategoryProducts as $CP)
	            		@if(count($CP->Products)>0)
	            		<!-- item -->
					    <div class="row-item row">
		                	<h3>
		                		<a href="DanhSachSanPham/{{$CP['id']}}">{{$CP->name}}</a> 
		                	
		                			<!-- C1 -->

		                	@foreach($CP->Products as $P)
		                	
		                		<small><a href="category.html"><i>
		                		
		                			{{$P->name}}
		                			
		                		</i></a>/</small>
		                		

							@endforeach()

		                	</h3>
		                	<!-- phần chi tiết -->
							<?php
		                	$data=$CP->Products->Where('noibat',1)->sortByDesc('id')->take(5);
		                	$tin1=$data->shift();
		                	?>
		                	<div class="col-md-8 border-right">
		                		<div class="col-md-5">
			                        <a href="XemSanPham/{{$CP['id']}}/{{$tin1['id']}}">
			                            <img class="img-responsive" src="images/product/{{$tin1['image']}}" alt="">
			                        </a>
			                    </div>

			                    <div class="col-md-7">
			                        <h3>Project Five</h3>
			                        <p>{{$tin1['description']}}</p>
			                        <a class="btn btn-primary" href="XemSanPham/{{$CP['id']}}/{{$tin1['id']}}">View Product <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>
		                    
							<div class="col-md-4">
								@foreach($data->all() as $tintuc)
								<a href="XemSanPham/{{$CP['id']}}/{{$tintuc['id']}}">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
									Mô tả:	{{$tintuc->description}} 
									</h4>
								</a>
								@endforeach
								
							</div>
		                		
							<div class="break"></div>

		                		
		                </div>
		                <!-- end item -->
		              @endif
		            @endforeach
					</div>


	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>


@endsection