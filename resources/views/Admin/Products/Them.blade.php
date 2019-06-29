@extends('Admin.Index.IndexAdmin')
@section('Content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Products
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="Admin/Products/Them" method="POST">
                                @csrf
                         
                         
                            <div class="form-group">

                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">

                                <label>Category ID</label>
                                <input class="form-control" name="id_type" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">

                                <label>Giá Khởi Điểm</label>
                                <input class="form-control" name="unit_price" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">

                                <label>Giá Khuyến Mãi</label>
                                <input class="form-control" name="promotion_price" placeholder="Please Enter Username" />
                            </div>

                              <div class="form-group">

                                <label>Image</label>
                                <input name="image" type="file" />
                            </div>
                           

                    <!--         
                            <div class="form-group">
                                <label>User Level</label>
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="1" checked="" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="2" type="radio">Member
                                </label>
                            </div> -->
                            <button type="submit" class="btn btn-default">Products Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection