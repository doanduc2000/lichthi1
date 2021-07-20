<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thông tin khoa</title>
<link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
</head>
<body>
    <h2 align='center'>Thông tin khoa</h2>
    @foreach ($khoa as $khoa)
    <table class="table">
        <tr>
            <th colspan="4">{{$khoa->TenKhoa}}</th>
        </tr>
        <tr>
            <th colspan="4">{{$khoa->TenBoMon}}</th>
        </tr>
    <tr>
    <th>STT</th>
    <th>Mã giáo viên</th>
    <th>Họ tên</th>
    <th>Chức vụ</th>
    </tr>
    <tr>
    <td>{{$loop->index+1}}</td>
    <td>{{$khoa->MaGiaoVien}}</td>
    <td>{{$khoa->HoTen}}</td>
    <td>{{$khoa->ChucVu}}</td>
    </tr>
    </table>
    @endforeach
</body>
</html>
