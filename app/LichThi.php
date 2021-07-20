<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichThi extends Model
{
    protected $table="lichthi";
    protected $primaryKey = 'ID_LichThi';
    protected $fillable = [
        'MaHocPhan', 'NgayThi', 'CaThi',
    ];
    public function hocphan(){
        return $this->belongsTo('App\HocPhan','ID_HocPhan','ID_LichThi'); 
    }
    public function ctlichthi(){
        return $this->hasMany('App\CTLichThi','ID_LichThi','ID_CTLichThi');
}
}