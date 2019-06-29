@extends('Admin.Index.IndexAdmin')
@section('Content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">CategoryProducts
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                               
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($CategoryProducts as $S)
                            <tr class="odd gradeX" align="center">
                                <td>{{$S->id}}</td>
                                <td>{{$S->name}}</td>
                                <td>{{$S->description}}</td>
                                <td>{{$S->image}}</td>
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="Admin/CategoryProducts/Xoa/{{$S->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="Admin/CategoryProducts/Sua/{{$S->id}}">Edit</a></td>
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