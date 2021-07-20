<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{
    protected $table="khoa";
    protected $primaryKey = 'ID_Khoa';
    public function bomon(){
        return $this->hasMany('App\BoMon','ID_Khoa','ID_BoMon');
    }
}
