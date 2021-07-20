<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\GiaoVien;
use App\Khoa;
use App\BoMon;
class Export implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function _construct(int $id){
        $this->id=$id;
       }
       public function view(): View
       {
           return view('Export.giaovien',
           ['khoa'=>DB::table('giaovien') 
           ->join('bomon', 'bomon.ID_BoMon', '=', 'giaovien.ID_BoMon')
           ->join('khoa', 'khoa.ID_Khoa', '=', 'bomon.ID_Khoa')
           ->select('bomon.*', 'khoa.*', 'giaovien.*')
           ->get()
           ]); 
       }
}
