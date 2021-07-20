<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::asset('home.css')}}">
</head>
<body>
   <ul>
       <li><a href="{{route('khoa/index')}}">Khoa</a></li>
       <li><a href="{{route('bomon/index')}}">Bộ Môn</a></li>
       <li><a href="{{route('giaovien/index')}}">Giáo viên</a></li>
       <li><a href="{{route('hocphan/index')}}">Học Phần</a></li>
   </ul>
</body>
</html>
