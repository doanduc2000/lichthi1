<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phongthi extends Model
{
    protected $table="phongthi";
    protected $primaryKey = 'ID_PhongThi';
    public function lichthi(){
        return $this->belongsTo('App\phongthi','ID_LichThi','ID_PhongThi');
    }
}
