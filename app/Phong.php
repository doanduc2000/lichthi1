<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    protected $table="phong";
    protected $primaryKey = 'ID_Phong';
    public function nha(){
        return $this->belongsTo('App\Nha','ID_Nha','ID_Phong'); 
    }
    public function ctlichthi(){
        return $this->hasMany('App\CTLichThi','ID_Phong','ID_CTLichThi');
    }
}
