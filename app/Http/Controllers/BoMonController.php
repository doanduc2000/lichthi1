<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\BoMon;
use App\Khoa;
class BoMonController extends Controller
{
    public function index()
    {
        $bomon=DB::table('bomon')->join('khoa', 'khoa.ID_Khoa', '=', 'bomon.ID_Khoa')->select('bomon.*','khoa.MaKhoa')->orderBy('MaBoMon')->get();
        return view('bomon/thongtinbomon',compact('bomon'));
        $boMon=DB::table('bomon')->get();
        
        return response()->json("helllll");
    }
    public function create()
    {
        $khoa=Khoa::all();
        return view('bomon/add_bomon',compact('khoa'));
    }
    public function store(Request $request)
    {
        //
        $bomon= new BoMon;
        $bomon->MaBoMon=$request->input("txt_mabomon");
        $bomon->ID_Khoa=$request->input("txt_idkhoa");
		$bomon->TenBoMon=$request->input("txt_tenbomon");
		$bomon->GhiChu=$request->input("txt_ghichu");
        $bomon->save();
        return redirect()->route('bomon/index');
        }
    public function show($id)
    {
        $bomon= BoMon::find($id);
        return view('bomon/update_bomon',compact('bomon'));
    }       
    public function edit($id)
    {
        $bomon=BoMon::find($id);
        $khoa=Khoa::all();
        return view('BoMon.update_bomon',compact('bomon','khoa'));
    }
    public function update(Request $request, $id)
    {
        $bomon= BoMon::find($id);
        $bomon->MaBoMon=$request->input("txt_mabomon");
        $bomon->ID_Khoa=$request->input("txt_idkhoa");
		$bomon->TenBoMon=$request->input("txt_tenbomon");
		$bomon->GhiChu=$request->input("txt_ghichu");
        $bomon->save();
        return redirect()->route('bomon/index');
    }
    public function destroy($id)
    {
        $bomon= BoMon::find($id);
        $bomon->delete();
        return redirect()->route('bomon/index');
    }
}
