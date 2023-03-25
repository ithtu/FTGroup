@extends("Admin.Layout.master")
@section("content")
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <h1 class="page-header"> Slide
                <small>Thêm mới</small>
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
                <form action="{{route('them_slide')}}" method="POST">
                @csrf
                <div class="form-group">
                <label>Tên Slide</label>
                <input class="form-control" name="ten" placeholder="Vui lòng nhập tên Slide" />
</div>
                <div class="form-group">
                <label>Nội Dung</label>
                <textarea name="noidung" class="form-control ckeditor" rows="5"></textarea>
                </div>
                <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" class="form-control" name="hinh"
                value=""/>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-default">Thêm</button>
                <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
                </div>
            </div>
        <!-- /.row -->
        </div>
    <!-- /.container-fluid -->
    </div>
@endsection