@extends('header')
@section('content')
<table class="table"> 
    <tr>
    <th>STT</th>
    <th>Mã Bộ Môn</th>
    <th>Mã giáo viên</th>
    <th>Họ Tên</th>
    <th>Chức Vụ</th>
    <th></td>
    <th></td>
    </tr>
    @foreach ($giaovien as $giaovien)
    <tr>
    <td>{{$loop->index+1}}</td>
    <td>{{$giaovien->MaBoMon}}</td>
    <td>{{$giaovien->MaGiaoVien}}</td>
    <td>{{$giaovien->HoTen}}</td>
    <td>{{$giaovien->ChucVu}}</td>
    <td><a href="{{route('giaovien/edit',$giaovien->ID_GiaoVien)}}">Sửa</a></td>
    <td><form action="{{route('giaovien/delete',$giaovien->ID_GiaoVien)}}" method="POST">
        <input type="submit" class="btnbutton" value="Xóa">
        @method('DELETE')
        @csrf
    </form>
    </td>
    </tr>
    @endforeach
</table>
    @endsection