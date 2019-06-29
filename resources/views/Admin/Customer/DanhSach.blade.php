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
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Customer as $U)
                            <tr class="odd gradeX" align="center">
                                <td>{{$U->id}}</td>
                                <td>{{$U->name}}</td>
                                <td>{{$U->gender}}</td>
                                <td>{{$U->email}}</td>
                                 <td>{{$U->address}}</td>
                                <td>{{$U->phone_numder}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="Admin/Customer/Xoa/{{$U->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="Admin/Customer/Sua/{{$U->id}}">Edit</a></td>
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