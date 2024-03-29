@extends('Admin.Index.IndexAdmin')
@section('Content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="Admin/Users/Them" method="POST">
                                @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="full_name" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>RePassword</label>
                                <input type="password" class="form-control" name="repassword" placeholder="Please Enter RePassword" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Please Enter Email" />
                            </div>
                               <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" name="phone" placeholder="Please Enter Username" />
                            </div>
                               <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="address" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>User Level</label>
                                <label class="radio-inline">
                                    <!-- thêm thành viên value = 1 -->
                                    <input name="rdoLevel" value="1" checked="" type="radio">Member
                                </label>
                                <!-- chỉ khi đăng nhập rồi mới kiểm tra được -->
                                @if(Auth::check())
                               @if((Auth::user()->chucnang==3))
                                <label class="radio-inline">
                                    <!-- thêm admin quản lí value =2 -->
                                    <input name="rdoLevel" value="2" type="radio">Admin
                                </label>
                               <!--  nếu mà là admin chủ với cột chức năng sẽ có giá trị là 3 , và chỉ admin chủ mới có thể thêm admin chủ ,admin bthg chỉ có thể thêm user-->
                                
                                    <label class="radio-inline">
                                        <input name="rdoLevel" value="3" type="radio">Member
                                    </label>
                                @endif
                                @endif
                            </div>
                            <button type="submit" class="btn btn-default">User Add</button>
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