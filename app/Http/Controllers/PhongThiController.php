<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\phongthi;
use App\LichThi;
use App\Nha;
use App\Phong;
use Psy\Formatter\Formatter;

class PhongThiController extends Controller
{
    public function getPhongThi(){
        $lichthi=LichThi::all();
        $nha=Nha::all();
        $phong=Phong::all();
        // $collection=collect($phong)->where('ID_Nha','=','1');
        // $tongbg=$collection->count();
        // return $tongbg;
        // exit;
        return view('phongthi',compact('lichthi','nha','phong'));
    }

    public function PhongThi($idNha){
        $phong=Phong::where('ID_Nha',$idNha)->get();
        echo 'Chọn phòng:';
        foreach($phong as $phong)
        {
            echo" <div id='xepphong1' class='checkbox'><input type='checkbox' id='xepphong' name='txt_phongthi[]' value='".$phong->TenPhong."'><label for='xepphong'> ".$phong->TenPhong."</label></div>";
        }
    }
    public function XepPhong($idPhongThi){
        $phong=Phong::where('ID_Phong',$idPhongThi)->get();
        foreach($phong as $phong){
            echo" <div id='xepphong1' class='checkbox'><input type='checkbox' id='xepphong2' name='txt_phongthi[]' value='".$phong->TenPhong."'><label for='xepphong'> ".$phong->TenPhong."</label></div>";
    }
}
      public function store(Request $request)
    {
        $phongthi=new phongthi;
        $phongthi->TenHocPhan=$request->input("txt_hocphan");
		$phongthi->NgayThi=$request->input("txt_ngaythi");
        $phongthi->CaThi=$request->input("txt_cathi"); 
        $phongthi->SoPhong=$request->input("txt_sophong");
        $phongthi->Nha=$request->input("txt_nha");
        $phongthi->PhongThi=$request->input("txt_phongthi");
        $phongthi->save();
        return back();
    }
}
