@extends('Admin.Index.IndexAdmin')
@section('Content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Products
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>ID Thể Loại</th>
                                <th>Mô Tả</th>
                                <th>Giá Khởi Điểm</th>
                                <th>Giá Khởi Khuyến Mãi</th>
                                <th>Image</th>  
                                <th>Unit</th>
                                <th>New</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Products as $S)
                            <tr class="odd gradeX" align="center">
                                <td>{{$S->id}}</td>
                                <td>{{$S->name}}</td>
                                <td>{{$S->id_type}}</td>
                                <td>{{$S->description}}</td>
                                <td>{{$S->unit_price}}</td>
                                <td>{{$S->promotion_price}}</td>
                                <td>{{$S->image}}</td>
                                <td>{{$S->unit}}</td>
                                <td>{{$S->new}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="Admin/Products/Xoa/{{$S->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="Admin/Products/Sua/{{$S->id}}">Edit</a></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection