<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
<title>Sửa thông tin Bộ Môn</title>
</head>
<body>
    <h2 align="center">Sửa Bộ Môn</h2>
    <form action="{{route('bomon/update',$bomon->ID_BoMon)}}" name="f1" onSubmit="return check()" method="POST">
        @method('PUT')
        @csrf
    <table align="center">
    <tr>
    <td>ID Bộ Môn</td>
    <td><input type="text" value="{{$bomon->ID_BoMon}}" disabled></td>
    </tr>
    <tr>
        <td>Mã Khoa</td>
        <td>
            <select name="txt_idkhoa">
                @foreach($khoa as $khoa)
                <option value="{{$khoa->ID_Khoa}}">{{$khoa->MaKhoa}}</option>
                @endforeach
        </select>
        </td>
        </tr>
    <tr>
    <td>Mã Bộ Môn</td>
    <td><input type="text" name="txt_mabomon" value="{{$bomon->MaBoMon}}"></td>
    </tr>
    <tr>
    <td>Tên Bộ Môn</td>
    <td><input type="text" name="txt_tenbomon" value="{{$bomon->TenBoMon}}"></td>
    </tr>
    <tr>
    <td>Ghi Chú</td>
    <td><input type="text" name="txt_ghichu" value="{{$bomon->GhiChu}}"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="btn_suabomon" value="Sửa">
    <a href="{{route('bomon/index')}}">Quay Lại</a>
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
