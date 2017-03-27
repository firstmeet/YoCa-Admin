<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $table="orders";
    protected $guarded=[];


    /*
     * relation with users
     */
    public function users()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    /*
     * relation with order_details
     */
    public function order_details()
    {
        return $this->belongsToMany('App\Goods','order_details','order_id','user_id');
    }
}
