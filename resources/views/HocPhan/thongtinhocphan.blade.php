@extends('header')
@section('content')
<table class="table"> 
    <tr>
    <th>STT</th>
    <th>Mã Bộ Môn</th>
    <th>Mã học phần</th>
    <th>Tên học phần</th>
    <th>Số tín chỉ</th>
    <th>Hình thức thi</th>
    <th colspan="2">Thao tác</th>
    </tr>
    @foreach ($hocphan as $hocphan)
    <tr>
    <td>{{$loop->index+1}}</td>
    <td>{{$hocphan->MaBoMon}}</td>
    <td>{{$hocphan->MaHocPhan}}</td>
    <td>{{$hocphan->TenHocPhan}}</td>
    <td>{{$hocphan->SoTinChi}}</td>
    <td>{{$hocphan->HinhThucThi}}</td>
    <td><a href="{{route('hocphan/edit',$hocphan->ID_HocPhan)}}">Sửa</a></td>
    <td><form action="{{route('hocphan/delete',$hocphan->ID_HocPhan)}}" method="POST">
        <input type="submit" class="btnbutton" value="Xóa">
        @method('DELETE')
        @csrf
    </form>
    </td>
    </tr>
    @endforeach
</table>
@endsection