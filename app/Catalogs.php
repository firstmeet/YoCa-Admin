<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogs extends Model
{
    //
    protected $table="catalogs";
    protected $guarded=[];


    /*
     * relation with goods
     */
    public function goods()
    {
        return $this->hasMany('App\Goods','goods_id','id');
    }
}
