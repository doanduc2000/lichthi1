<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thông tin</title>
<link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::asset('fontawesome/css/all.css')}}">
<style> 
.chinh{
    background-color: #80808017;;
    height:1000px;
}
.container{
    background-color: white;   
    height:1000px
}
.row{
    padding-top: 5px;
    padding-bottom: 5px;
}
.btnbutton{
    border: none;
    background-color: white;
    color: #007bff;
}
.btndelete:hover{
    color: #0056b3;
}
a:hover{
    text-decoration: none;
}
.dropdown-menu{
    margin-left: -15px;
}
.dropdowncontent{
    color:black;
    font-size:20px;
}
.dropdowncontent:hover{
    color: #00000085;
}
</style>
</head>
<body>
    <div class="chinh">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="" class="dropdowncontent" data-toggle="dropdown"><i class='fas fa-bars'></i> Menu</a>
                <div class="dropdown-menu">
                <a href="{{route('khoa/index')}}"  class="dropdown-item"> Khoa</a>
                <a href="{{route('khoa/create')}}" class="dropdown-item">Thêm Khoa</a>
                <div class="dropdown-divider"></div>
                <a href="{{route('bomon/index')}}" class="dropdown-item">Bộ Môn</a>
                <a href="{{route('bomon/create')}}" class="dropdown-item">Thêm Bộ Môn</a>
                <div class="dropdown-divider"></div>
                <a href="{{route('giaovien/index')}}" class="dropdown-item">Giáo Viên</a>
                <a href="{{route('giaovien/create')}}" class="dropdown-item">Thêm Giáo Viên</a>
                <div class="dropdown-divider"></div>
                <a href="{{route('hocphan/index')}}" class="dropdown-item">Học Phần</a>
                <a href="{{route('hocphan/create')}}" class="dropdown-item">Thêm Học Phần</a>
                </div>
            </div>
        </div>
        @yield('content')
</div>
</div>
    <script src="{{URL::asset('bootstrap/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{URL::asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
