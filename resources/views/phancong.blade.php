<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Xếp phòng thi</title>
<link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">

</head>
<body>
    <h3>Phân công</h3>
    Ngày thi: <input type="text" value="">
    Số ca: <input type="text">
    Ca Thi: <select name="">
        <option value=""></option>
    </select>
   <table border="1">
       <tr>
           <td>Danh sách học phần</td>
           <td>Phòng thi</td>
           <td>Giáo viên</td>
       </tr>
       <tr>
        <td>
            <select>
                @foreach ($hocphan as $hocphan)
                <option value="{{$hocphan->ID_HocPhan}}">{{$hocphan->MaHocPhan}}</option>
                @endforeach
            </select>
        </td>
        <td></td>
        <td></td>
    </tr>
   </table>
</body>
</html>
