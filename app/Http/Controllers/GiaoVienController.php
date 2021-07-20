<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\GiaoVien;
use App\BoMon;
class GiaoVienController extends Controller
{
    public function index()
    {
        $giaovien=DB::table('giaovien')->join('bomon','giaovien.ID_BoMon', '=', 'bomon.ID_BoMon')->get();
        return view('giaovien/thongtingiaovien',compact('giaovien'));
    }
    public function create()
    {
        $bomon=BoMon::all();
        return view('giaovien/add_giaovien',compact('bomon'));
    }
    public function store(Request $request)
    {
        //
        $giaovien= new GiaoVien;
        $giaovien->MaGiaoVien=$request->input("txt_magiaovien");
        $giaovien->ID_BoMon=$request->input("txt_idbomon");
        $giaovien->HoTen=$request->input("txt_hoten");
        $giaovien->ChucVu=$request->input("txt_chucvu");
		$giaovien->MatKhau=$request->input("txt_matkhau");
        $giaovien->save();
        return redirect()->route('giaovien/index');
        }
    public function show($id)
    {
        $giaovien= GiaoVien::find($id);
        return view('giaovien/update_giaovien',compact('giaovien'));
    }       
    public function edit($id)
    {
        $giaovien=GiaoVien::find($id);
        $bomon=BoMon::all();
        return view('giaovien/update_giaovien',compact('giaovien','bomon'));
    }
    public function update(Request $request, $id)
    {
        $giaovien= GiaoVien::find($id);
        $giaovien->MaGiaoVien=$request->input("txt_magiaovien");
        $giaovien->ID_BoMon=$request->input("txt_idbomon");
        $giaovien->HoTen=$request->input("txt_hoten");
        $giaovien->ChucVu=$request->input("txt_chucvu");
		$giaovien->MatKhau=$request->input("txt_matkhau");
        $giaovien->save();
        return redirect()->route('giaovien/index');
    }
    public function destroy($id)
    {
        $giaovien= GiaoVien::find($id);
        $giaovien->delete();
        return redirect()->route('giaovien/index');
    }
}
