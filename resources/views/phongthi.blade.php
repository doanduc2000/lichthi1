<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Xếp phòng thi</title>
<link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
<style>
    h3{text-align: center}
    input[type=text]{
        width: 50px;
        text-align: center;
    }
    .cathi{
        margin-bottom: 10px;
    }
    .content{ 
        text-align: center; 
    }   
    table{
        width: 600px;
        height: 100px;
    }
    button{
        margin-top: 10px;
    }
    #Phong{
        height: 200px;
        overflow: scroll;
    }
    .phong{
        height: 282px;
        overflow: scroll;
    }
    #PhongThi{
        height: 282px;
        overflow: scroll;
    }
</style>
</head>
<body>
    <h3>Xếp phòng thi</h3>
<form action="{{route("phongthi/store")}}" method="POST">
    <div  class="content">
    <div class="cathi">
    Ngày Thi:
    <input type="date" name="txt_ngaythi">
    Ca Thi:
    <input type="text" name="txt_cathi">
    Số Phòng:
    <input type="text"name="txt_sophong">
</div>
<div>
    <table align="center" border="1">
        <tr>
            <td>Danh sách môn thi</td>
            <td>Phòng thi sử dụng cho môn thi</td>
            <td></td>
            <td colspan="2">Danh sách phòng thi</td>
        </tr>
        <tr>
        <td rowspan="2">
        <div class="phong">
            @foreach ($lichthi as $lichthi)
            <div class="custom-radio">
                <input type="radio" id="hocphan" name="txt_hocphan" value="{{$lichthi->MaHocPhan}}">
                <label for="hocphan">{{$lichthi->MaHocPhan}}</label>
                <br>
            </div>
            @endforeach
        </div>
        </td>
        <td rowspan="2">
            <div id="PhongThi"></div>
        </td>
        <td rowspan="2" width='40px'>
            <button class="btn-danger" type="button" id="btnleft">&#8592;</button>
            <button class="btn-danger" type="button" id="btnright">&#8594;</button>
        </td>
        <td style="height: 80px;"> 
            <div>Chọn nhà:</div>
            <select  name="txt_nha" id="Nha">
            <option>--------</option>
            @foreach ($nha as $nha)
            <option value="{{$nha->ID_Nha}}">{{$nha->TenNha}}</option> 
            @endforeach   
            </select></td>
        </tr>
        <tr>
            <td><form action=""><div id="Phong"></div></form></td>
        </tr>
    </table>
    <input type="submit" class="btn-danger" value="Lưu">
</div>
</form>
<ul id="list">

</ul>
<input type="checkbox" id="item1" name="item one" />
<input type="checkbox" id="item2" name="item two" />
<input type="checkbox" id="item3" name="item three" />
<input type="checkbox" id="item4" name="item four" />
</body>
<script src="{{URL::asset('bootstrap/js/jquery-3.5.1.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $("#Nha").change(function(){
            var idNha= $(this).val();
            $.get("http://localhost:8000/phongthi/chonphong/"+idNha,function(data){
                $("#Phong").html(data);
            });
        });
        $("#btnleft").click(function(){
        if($("#xepphong").is(':checked')){
        $("#PhongThi").append('<div class="checkbox"><input type="checkbox" id="Phongthi" value="${value}"><label for="${value}">${value}</label></div>');
        $("#xepphong1").remove();
        }
    });
    });
    //     $("#btnright").click(function(){
    //     if($("#Phongthi1").is(':checked')){
    //     $("#xepphong1").append('<div class="checkbox"><input type="checkbox" id="Phongthi" value="${value}"><label for="${value}">${value}</label></div>');
    //     $("#Phongthi").remove();
    //     }
    // });
    function toggleListCheckbox() {
    if($(this).is(':checked')) {
        var checkboxId = $(this).attr('id');
        var checkboxName = $(this).attr('name');
        $('#list').append('<li class="' + checkboxId  + '">' + checkboxName  + '</li>');
    } 
    else 
    {
        $('#list'+checkboxId).remove();
    }
}

$(document).ready(function () {
    $('input[type=checkbox]').each(toggleListCheckbox).change(toggleListCheckbox);
})
</script>
</html>
