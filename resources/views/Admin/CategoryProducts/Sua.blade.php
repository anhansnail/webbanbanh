@extends('Admin.Index.IndexAdmin')
@section('Content')
   <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">CategoryProducts
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                          <form action="Admin/CategoryProducts/Sua/{{$CategoryProducts->id}}" method="POST">
                                @csrf

                            <div class="form-group">
                                
                                <label>ID</label>
                                <input class="form-control" name="id" placeholder="Please Enter Username" value="{{$CategoryProducts->id}}" />
                            </div>    
                            <div class="form-group">

                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Username" />
                            </div>
                           
                              <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="3"></textarea>
                            </div>
                           
                              <div class="form-group">

                                <label>Image</label>
                                <input name="image" type="file" />
                            </div>
                           

                           
                           
                           <!--  <div class="form-group">
                                <label>User Level</label>
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="1" checked="" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="2" type="radio">Member
                                </label>
                            </div> -->
                            <button type="submit" class="btn btn-default">Change</button>
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