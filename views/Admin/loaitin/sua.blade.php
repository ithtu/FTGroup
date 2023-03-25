@extends("Admin.Layout.master")
@section("content")
<div id="page-wrapper">
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-12">
    <h1 class="page-header"> Loại Tin
    <small>Sữa thông tin</small>
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
            <form action="{{route('sua_loaitin',$loaitin->id)}}" method="POST">
            @csrf
            <div class="form-group">
            <label>Tên loại tin</label>
            <input class="form-control" name="ten" value="{{$loaitin->Ten}}"/>
            <label>Tên thể loại</label>
            <select class="form-control" name="theloai">

@foreach($theloai as $tl)
<option value="{{$tl->id}}" @if($loaitin->idTheLoai==$tl->id)
{{"selected"}}
@endif >{{$tl->Ten}}</option>
@endforeach

</select>
            </div>
            <button type="submit" class="btn btn-default">Cập nhật</button>
            <button type="reset" class="btn btn-default">Làm mới</button>
            <form>
        </div>
    </div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->
</div>
@endsection