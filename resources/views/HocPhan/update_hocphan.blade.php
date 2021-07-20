<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
<title>Thêm thông tin học phần</title>
</head>
<body>
    <h2 align="center">Thêm học phần</h2>
    <form action="{{Route('hocphan/update',$hocphan->ID_HocPhan)}}" name="f1" onSubmit="return check()" method="POST">
    @method('PUT')
    @csrf
    <table align="center">
    <tr>
    <td>ID học phần</td>
    <td><input type="text" name="txt_idhocphan" value="{{$hocphan->ID_HocPhan}}" disabled></td>
    </tr>
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
    <td><input type="text" name="txt_mahocphan" value="{{$hocphan->MaHocPhan}}"></td>
    </tr>
    <tr>
    <td>Tên học phần</td>
    <td><input type="text" name="txt_tenhocphan" value="{{$hocphan->TenHocPhan}}"></td>
    </tr>
    <tr>
    <td>Số tín chỉ</td>
    <td><input type="text" name="txt_sotinchi" value="{{$hocphan->SoTinChi}}"></td>
    </tr>
    <tr>
    <td>Hình thức thi</td>
    <td><input type="text" name="txt_hinhthucthi" value="{{$hocphan->HinhThucThi}}"></td>
    </tr>
    <tr>
    <td>Ghi Chú</td>
    <td><input type="text" name="txt_ghichu" value="{{$hocphan->GhiChu}}"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="btn_suahocphan" value="Sửa">
    <a href="{{route('hocphan/index')}}">Quay Lại</a>
    </td>
    </tr> 
    </table>        
    </form>
    </body>
</html>
