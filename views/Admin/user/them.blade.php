@extends('admin.Layout.master')
@section('content')
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
                    @if(count($errors)>0)
                <div class="alert alert-danger">
         @foreach($errors->all() as $err)
                {{$err}}<br>
         @endforeach
                </div>
          @else
         @if (session('thongbao'))
                <div class="alert alert-success">
                {{session('thongbao')}}
                </div>
         @endif
        @endif
                        <form action="{{route('them_users')}}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="name" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Please Enter Password" />
                            </div>
                          
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Please Enter Email" />
                            </div>
                            <div class="form-group">
                                <label>User Level</label>
                                <label class="radio-inline">
                                    <input name="quyen" value="0" checked="" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="quyen" value="1" type="radio">Member
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Lưu trữ</button>
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