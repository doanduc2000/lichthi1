<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
<title>Sửa thông tin khoa</title>
</head>
<body>
    <h2 align="center">Sửa Khoa</h2>
    <form action="{{route('khoa/update',$khoa->ID_Khoa)}}" name="f1" onSubmit="return check()" method="POST">
        @method('PUT')
        @csrf
    <table align="center">
    <tr>
    <td>ID Khoa</td>
    <td><input type="text" value="{{$khoa->ID_Khoa}}" disabled></td>
    </tr>
    <tr>
    <td>Mã Khoa</td>
    <td><input type="text" name="txt_makhoa" value="{{$khoa->MaKhoa}}"></td>
    </tr>
    <tr>
    <td>Tên Khoa</td>
    <td><input type="text" name="txt_tenkhoa" value="{{$khoa->TenKhoa}}"></td>
    </tr>
    <tr>
    <td>Ghi Chú</td>
    <td><input type="text" name="txt_ghichu" value="{{$khoa->GhiChu}}"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="btn_suakhoa" value="Sửa">
    <a href="{{route('khoa/index')}}">Quay Lại</a>
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
