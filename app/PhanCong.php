<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhanCong extends Model
{
    protected $table="phancong";
    protected $primaryKey = 'ID_PhanCong';
    public function lichthi(){
        return $this->belongsTo('App\LichThi','ID_LichThi','ID_PhanCong');
    }
}
