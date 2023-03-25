@extends("buoi6.master")
@section("noidung")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Danh sach mon hoc</title>
</head>
<body>
   <h1>DANH SACH MON HOC</h1>
   <button type="button" class="btn btn-primary">Thêm môn học</button>
   <table class="table table-light">
    <thead class="thead-light">
    <tr>
        <th>Mã môn học</th>
        <th>Tên môn học</th>
        <th>Số Tín chỉ</th>
        <th>Thao Tác</th>
    </tr>
    </thead>
    <<tbody>
        @foreach($subjects as $subject)
        <tr>
            <td>{{$subject->mamon}}</td>
            <td>{{$subject->tenmon}}</td>
            <td>{{$subject->sotinchi}}</td>
            <td><button type="button" class="btn btn-secondary" name="suamh">Cập nhật</button>
            <button type="button" class="btn btn-success" name="xoamh">Xóa</button>
        </td>   
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th colspan="4"> Tổng số môn là :{{$total}}</th>
        </tr>
    </tfoot>
   </table>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
@endsection