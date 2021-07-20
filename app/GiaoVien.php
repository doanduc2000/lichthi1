<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiaoVien extends Model
{
    protected $table="giaovien";
    protected $primaryKey = 'ID_GiaoVien';
    public function bomon(){
        return $this->belongsTo('App\BoMon','ID_BoMon','ID_GiaoVien');
    }
    public function ctlichthi(){
        return $this->hasMany('App\CTLichThi','ID_GiaoVien','ID_CTLichThi');
}
}