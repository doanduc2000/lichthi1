<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
<title>Thêm thông tin bộ môn</title>
</head>
<body>
    <h2 align="center">Thêm Bộ Môn</h2>
    <form action="{{Route('bomon/store')}}" name="f1" onSubmit="return check()" method="POST">
    <table align="center">
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
    <td><input type="text" name="txt_mabomon"></td>
    </tr>
    <tr>
    <td>Tên Bộ Môn</td>
    <td><input type="text" name="txt_tenbomon"></td>
    </tr>
    <tr>
    <td>Ghi Chú</td>
    <td><input type="text" name="txt_ghichu"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="btn_thembomon" value="Thêm">
    <a href="{{route('bomon/index')}}">Quay Lại</a>
    </td>
    </tr> 
    </table>        
    </form>
    </body>
    {{-- <script type="text/javascript">
        function check(){
            var MaBoMon=document.f1.txt_mabomon.value; 
            var TenBoMon=document.f1.txt_tenbomon.value; 
            var GhiChu=document.f1.txt_ghichu.value;
            if(MaBoMon==null || MaBoMon=="" || TenBoMon==null ||  TenBoMon=="" || GhiChu==null  || GhiChu=="")
                {
                    alert("Không được để trống");
                    return false;
                }
        }
        </script> --}}
</html>
