@extends('header')
@section('content')
<table class="table"> 
    <tr>
    <th>STT</th>
    <th>Mã Khoa</th>
    <th>Tên Khoa</th>
    <th>Ghi Chú</th>
    <th colspan="2">Thao tác</th>
    </tr>
    @foreach ($khoa as $khoa)
    <tr>
    <td>{{$loop->index+1}}</td>
    <td>{{$khoa->MaKhoa}}</td>
    <td>{{$khoa->TenKhoa}}</td>
    <td>{{$khoa->GhiChu}}</td>
    <td><a href="{{route('khoa/edit',$khoa->ID_Khoa)}}">Sửa</a></td>
    <td>
        <form action="{{route('khoa/delete',$khoa->ID_Khoa)}}" method="POST">
        <input type="submit" class="btnbutton" value="Xóa">
        @method('DELETE')
        @csrf
        </form>
    </td>
    </tr>
    @endforeach
    </table>
    @endsection