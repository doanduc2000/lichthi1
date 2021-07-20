<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
<title>Thêm thông tin học phần</title>
</head>
<body>
    <h2 align="center">Thêm học phần</h2>
    <form action="{{Route('hocphan/store')}}" name="f1" onSubmit="return check()" method="POST">
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
    <td>Mã học phần</td>
    <td><input type="text" name="txt_mahocphan"></td>
    </tr>
    <tr>
    <td>Tên học phần</td>
    <td><input type="text" name="txt_tenhocphan"></td>
    </tr>
    <tr>
    <td>Số tín chỉ</td>
    <td><input type="text" name="txt_sotinchi"></td>
    </tr>
    <tr>
    <td>Hình thức thi</td>
    <td><input type="text" name="txt_hinhthucthi"></td>
    </tr>
    <tr>
    <td>Ghi Chú</td>
    <td><input type="text" name="txt_ghichu"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="btn_themhocphan" value="Thêm">
    <a href="{{route('hocphan/index')}}">Quay Lại</a>
    </td>
    </tr> 
    </table>        
    </form>
    </body>
</html>
