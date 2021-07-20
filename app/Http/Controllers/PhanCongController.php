<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PhanCong;
use App\LichThi;
use App\HocPhan;
class PhanCongController extends Controller
{
    public function index(){
        $hocphan=HocPhan::all();
        $phancong=DB::table('phancong')->join('lichthi','phancong.ID_LichThi', '=', 'lichthi.ID_LichThi')->get();
        return view('phancong',compact('phancong','hocphan'));
    }
}
