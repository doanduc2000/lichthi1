<?php

namespace App\Imports;

use App\LichThi;
use Maatwebsite\Excel\Concerns\ToModel;

class LichThiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new LichThi([
            'MaHocPhan'=>$row[0],
            'NgayThi'=>$row[1],
            'CaThi'=>$row[2],
        ]);
    }
}
