<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoMon extends Model
{
    protected $table="bomon";
    protected $primaryKey = 'ID_BoMon';
    public function khoa(){
        return $this->belongsTo('App\Khoa','ID_Khoa','ID_BoMon'); 
    }
    public function giaovien(){
        return $this->hasMany('App\GiaoVien','ID_BoMon','ID_GiaoVien');
    }
    public function hocphan(){
        return $this->hasMany('App\HocPhan','ID_BoMon','ID_HocPhan');
    }
}
