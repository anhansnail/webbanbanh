@extends('Admin.Index.IndexAdmin')
@section('Content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Link</th>
                                <th>Image</th>  
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Slide as $S)
                            <tr class="odd gradeX" align="center">
                                <td>{{$S->id}}</td>
                                <td>{{$S->link}}</td>
                                <td>{{$S->image}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="Admin/Slide/Xoa/{{$S->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="Admin/Slide/Sua/{{$S->id}}">Edit</a></td>
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