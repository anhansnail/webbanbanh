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
                                <th>Email</th>
                                <th>Password</th>
                                <th>Phone</th>
                                <th>Address</th>
                                @if(Auth::check())
                                    @if(Auth::user()->chucnang==2)
                                        <th>Authorization</th>
                                    @endif
                                @endif
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Users as $U)
                            <tr class="odd gradeX" align="center">
                                <td>{{$U->id}}</td>
                                <td>{{$U->full_name}}</td>
                                <td>{{$U->email}}</td>
                                <td>{{$U->password}}</td>
                                 <td>{{$U->phone}}</td>
                                <td>{{$U->address}}</td>
                                  @if(Auth::check())
                                    @if((Auth::user()->chucnang==2)||(Auth::user()->chucnang==3))
                                        <td>{{$U->chucnang}}</td>
                                    @endif
                                @endif
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="Admin/Users/Xoa/{{$U->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="Admin/Users/Sua/{{$U->id}}">Edit</a></td>
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