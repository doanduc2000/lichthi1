<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\HocPhan;
use App\BoMon;
class HocPhanController extends Controller
{
    public function index()
    {
        $hocphan=DB::table('hocphan')->join('bomon','hocphan.ID_BoMon', '=', 'bomon.ID_BoMon')->orderBy('MaHocPhan')->get();
        return view('hocphan/thongtinhocphan',compact('hocphan'));
    }
    public function create()
    {
        $bomon=BoMon::all();
        return view('hocphan/add_hocphan',compact('bomon'));
    }
    public function store(Request $request)
    {
        //
        $hocphan= new HocPhan;
        $hocphan->MaHocPhan=$request->input("txt_mahocphan");
        $hocphan->ID_BoMon=$request->input("txt_idbomon");
        $hocphan->TenHocPhan=$request->input("txt_tenhocphan");
        $hocphan->SoTinChi=$request->input("txt_sotinchi");
        $hocphan->HinhThucThi=$request->input("txt_hinhthucthi");
		$hocphan->GhiChu=$request->input("txt_ghichu");
        $hocphan->save();
        return redirect()->route('hocphan/index');
        }
    public function show($id)
    {
        $hocphan= HocPhan::find($id);
        return view('hocphan/update_hocphan',compact('hocphan'));
    }       
    public function edit($id)
    {
        $hocphan=HocPhan::find($id);
        $bomon=BoMon::all();
        return view('hocphan/update_hocphan',compact('hocphan','bomon'));
    }
    public function update(Request $request, $id)
    {
        $hocphan= HocPhan::find($id);
        $hocphan->MaHocPhan=$request->input("txt_mahocphan");
        $hocphan->ID_BoMon=$request->input("txt_idbomon");
        $hocphan->TenHocPhan=$request->input("txt_tenhocphan");
        $hocphan->SoTinChi=$request->input("txt_sotinchi");
        $hocphan->HinhThucThi=$request->input("txt_hinhthucthi");
		$hocphan->GhiChu=$request->input("txt_ghichu");
        $hocphan->save();
        return redirect()->route('hocphan/index');
    }
    public function destroy($id)
    {
        $hocphan= HocPhan::find($id);
        $hocphan->delete();
        return redirect()->route('hocphan/index');
    }
}
