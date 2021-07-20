<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
<title>Sửa thông tin giáo viên</title>
</head>
<body>
    <h2 align="center">Sửa thông tin giáo viên</h2>
    <form action="{{route('giaovien/update',$giaovien->ID_GiaoVien)}}" name="f1" onSubmit="return check()" method="POST">
        @method('PUT')
        @csrf
    <table align="center">
    <tr>
    <td>ID giáo viên</td>
    <td><input type="text" name="txt_idgiaovien" value="{{$giaovien->ID_GiaoVien}}" disabled></td>
    </tr>
    <tr>
    <td>Mã Bộ Môn</td>
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
    <td><input type="text" name="txt_magiaovien" value="{{$giaovien->MaGiaoVien}}"></td>
    </tr>
    <tr>
    <td>Họ Tên</td>
    <td><input type="text" name="txt_hoten" value="{{$giaovien->HoTen}}"></td>
    </tr>
    <tr>
    <td>Chức Vụ</td>
    <td><input type="text" name="txt_chucvu" value="{{$giaovien->ChucVu}}"></td>
    </tr>
    <tr>
    <td>Mật Khẩu</td>
    <td><input type="password" name="txt_matkhau" value="{{$giaovien->MatKhau}}"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="btn_themgiaovien" value="Sửa">
    <a href="{{route('giaovien/index')}}">Quay Lại</a>
    </td>
    </tr> 
    </table>        
    </form>
    </body>
    {{-- <script type="text/javascript">
        function check(){
            var MaKhoa=document.f1.txt_makhoa.value; 
            var TenKhoa=document.f1.txt_tenkhoa.value; 
            var GhiChu=document.f1.txt_ghichu.value;
            if(MaKhoa==null || MaKhoa=="" || TenKhoa==null ||  TenKhoa=="" || GhiChu==null  || GhiChu=="")
                {
                    alert("Không được để trống");
                    return false;
                }
        }
        </script> --}}
</html>
