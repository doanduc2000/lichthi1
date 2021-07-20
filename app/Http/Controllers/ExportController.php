<?php

namespace App\Http\Controllers;

use App\GiaoVien;
use App\HocPhan;
use Illuminate\Http\Request;
use App\Exports\Export;
use App\Imports\LichThiImport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function ImportView()
    {
       return view('import');
    }
    public function export() 
    {   
        return Excel::download(new Export, 'giaovien.xlsx');
    }
    public function import()
    {
        Excel::import(new LichThiImport,request()->file('file'));
        return back();
    }
}
