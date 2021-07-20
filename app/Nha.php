<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nha extends Model
{
    protected $table="nha";
    protected $primaryKey = 'ID_Nha';
    public function phong(){
        return $this->hasMany('App\Phong','ID_Nha','ID_Phong');
    }
}
