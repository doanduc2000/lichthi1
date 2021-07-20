<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
<title>Thêm thông tin giáo viên</title>
</head>
<body>
    <h2 align="center">Thêm giáo viên</h2>
    <form action="{{Route('giaovien/store')}}" name="f1" onSubmit="return check()" method="POST">
    <table align="center">
    <tr>
    <td>Mã bộ môn</td>
    <td>
        <select name="txt_idbomon">
            @foreach($bomon as $bomon)
            <option value="{{$bomon->ID_BoMon}}">{{$bomon->MaBoMon}}</option>
            @endforeach
        </select>
    </td>
    </tr>
    <tr>
    <td>Mã giáo viên</td>
    <td><input type="text" name="txt_magiaovien"></td>
    </tr>
    <tr>
    <td>Họ Tên</td>
    <td><input type="text" name="txt_hoten"></td>
    </tr>
    <tr>
    <td>Chức Vụ</td>
    <td><input type="text" name="txt_chucvu"></td>
    </tr>
    <tr>
    <td>Mật Khẩu</td>
    <td><input type="password" name="txt_matkhau"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="btn_themgiaovien" value="Thêm">
    <a href="{{route('giaovien/index')}}">Quay Lại</a>
    </td>
    </tr> 
    </table>        
    </form>
    </body>
</html>
