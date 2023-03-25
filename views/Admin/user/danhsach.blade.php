@extends('admin.Layout.master')
@section('content')
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
                @if (session('thongbao'))
                <div class="alert alert-success">
                {{session('thongbao')}}
                </div>
        @endif
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                               <th>Stt</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Quyền</th>
                                <th>Delete</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $nd)
                            <tr class="odd gradeX" align="center">
                            <td>{{$nd->id}}</td>
                            <td>{{$nd->name}}</td>
                            <td>{{$nd->email}}</td>
                            <td>{{$nd->quyen}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                
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