<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Khoa;
class KhoaController extends Controller
{
    public function index()
    {
        $khoa=Khoa::all();
        return view('khoa/thongtinkhoa',compact('khoa'));
    }
    public function create()
    {
        return view('khoa/add_khoa');
    }
    public function store(Request $request)
    {
        //
        $khoa= new Khoa;
        $khoa->MaKhoa=$request->input("txt_makhoa");
		$khoa->TenKhoa=$request->input("txt_tenkhoa");
		$khoa->GhiChu=$request->input("txt_ghichu");
        $khoa->save();
        return redirect()->route('khoa/index');
        }
    public function show($id)
    {
        $khoa= Khoa::find($id);
        return view('khoa/update_khoa',compact('khoa'));
    }       
    public function edit($id)
    {
        $khoa=Khoa::find($id);
        return view('khoa/update_khoa',compact('khoa'));
    }
    public function update(Request $request, $id)
    {
        $khoa = Khoa::find($id);
        $khoa->MaKhoa=$request->input("txt_makhoa");
		$khoa->TenKhoa=$request->input("txt_tenkhoa");
		$khoa->GhiChu=$request->input("txt_ghichu");
        $khoa->save();
        return redirect()->route('khoa/index');
    }
    public function destroy($id)
    {
        $khoa= Khoa::find($id);
        $khoa->delete();
        return redirect()->route('khoa/index');
    }
}

