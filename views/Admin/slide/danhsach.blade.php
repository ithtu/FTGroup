@extends("admin.Layout.master")
@section("content")
<div id="page-wrapper">
<div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                <h1 class="page-header">Slide
                <small>Danh Sách</small>
                </h1>
                </div>  @if (session('thongbao'))
                <div class="alert alert-success">
                {{session('thongbao')}}
                </div>
        @endif

        <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover"

                    id="dataTables-example">
                    <thead>
                            <tr align="center">
                            <th>ID</th>
                            <th>Ten</th>
                            <th>Hình</th>
                           
        
                            <th colspan="2">Thao tác</th>
                            </tr>
                    </thead>
                    <tbody>
                    @foreach($slide as $slide)

                <tr class="odd gradeX" align="center">
                            <td>{{$slide->id}}</td>
                            <td>{{$slide->Ten}}</td>
                            <td>  <img class="img-responsive" src="../resources/images/{{$slide->Hinh}}" alt=""></td>                           
                            <td class="center"><i class="fa fa-trash-o fa-fw"></i><a

                            href="{{route('xoa_slide',$slide->id)}}"> Xoá</a></td>

                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a

                            href=""> Sửa</a></td>

                    </tr>

                    @endforeach

                    </tbody>
                    </table>

        </div>
        <!-- /.row -->
        </div>
<!-- /.container-fluid -->
</div>
@endsection`