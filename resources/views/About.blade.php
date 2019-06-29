@extends('Layout.Index')
@section('Content')
 <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="slide-image" src="image/800x300.png" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="image/800x300.png" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="image/800x300.png" alt="">
                        </div>
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
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Introduction</h2>
	            	</div>

	            	<div class="panel-body">
	            		<!-- item -->
					   <p>
					   Để có những chiếc bánh, miếng bánh ngon vào mùa hè, đặt bánh kem in hình thì ngoài nguyên liệu đảm bảo bánh tươi, bánh còn thơm, bánh trong thời hạn sử dụng thì yếu tố thời tiết cũng làm cho bánh bị hỏng, bị chua, khi ăn sẽ mất đi mùi thơm đặc trưng của mỗi dòng bánh, hương vị bánh mang lại. Để giữ cho bánh ăn vẫn ngon bánh gato giá rẻ trong thời tiết mùa hè. Đặc biệt khi mang bánh đi tặng gia đình, bạn bè, người thân… lúc cắt bánh, mọi người vẫn cảm nhận được bánh ngon, bánh đẹp.. thì  IT có vài lưu ý để các bạn tham khảo nhé

					   	
					   </p>
                       <div style="text-align: center;">
                             <img src="images/banhkem.png" style="width:500px;height:333px;">

                       </div>
                     
					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

@endsection