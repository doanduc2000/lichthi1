<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CTLichThi extends Model
{
    protected $table="ctlichthi";
    protected $primaryKey = 'ID_CTLichThi';
    public function giaovien(){
        return $this->belongsTo('App\GiaoVien','ID_GiaoVien','ID_CTLichThi'); 
    }
    public function lichthi(){
        return $this->belongsTo('App\LichThi','ID_LichThi','ID_CTLichThi'); 
    }
    public function phong(){
        return $this->belongsTo('App\Phong','ID_Phong','ID_CTLichThi'); 
    }
}
