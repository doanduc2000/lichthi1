<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocPhan extends Model
{
    protected $table="hocphan";
    protected $primaryKey = 'ID_HocPhan';
    public function bomon(){
        return $this->belongsTo('App\BoMon','ID_BoMon','ID_HocPhan');
    }
    public function lichthi(){
        return $this->hasMany('App\LichThi','ID_HocPhan','ID_LichThi');
}
}