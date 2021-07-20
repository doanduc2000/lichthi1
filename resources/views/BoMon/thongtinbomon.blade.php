@extends('header')
@section('content')
<table class="table"> 
    <tr>
    <th>STT</th>
    <th>Mã Khoa</th>
    <th>Mã Bộ Môn</th>
    <th>Tên Bộ Môn</th>
    <th>Ghi Chú</th>
    <th></td>
    <th></td>
    </tr>
    @foreach ($bomon as $bomon)
    <tr>
    <td>{{$loop->index+1}}</td>
    <td>{{$bomon->MaKhoa}}</td>
    <td>{{$bomon->MaBoMon}}</td>
    <td>{{$bomon->TenBoMon}}</td>
    <td>{{$bomon->GhiChu}}</td>
    <td><a href="{{route('bomon/edit',$bomon->ID_BoMon)}}">Sửa</a></td>
    <td><form action="{{route('bomon/delete',$bomon->ID_BoMon)}}" method="POST">
        <input type="submit" class="btnbutton" value="Xóa">
        @method('DELETE')
        @csrf
    </form>
    </td>
    </tr>
    @endforeach
</table>
    @endsection   