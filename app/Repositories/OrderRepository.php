<?php
namespace App\Repositories;
use App\Orders;

/**
 * Created by PhpStorm.
 * User: yun
 * Date: 2017/3/27
 * Time: 21:42
 */
class OrderRepository
{
       private $orders;
       public function __construct(Orders $orders)
       {
           $this->orders=$orders;
       }

       /*
        * get order with users
        * @param user_id
        *
        * @return orders
        */
       public function getOrderFromUsers($user_id=null)
       {
          if(is_null($user_id)){
              $query=$this->orders->with("users")->whereNotIn('status',['6'])->get();
          }else{
              $query=$this->orders->with("users")->where('user_id',$user_id)->get();
          }
          return $query;
       }

       /*
        * get order details from order_id
        *
        * @param $order_id;
        *
        * @return order_details;
        */
    /**
     * @return Orders
     */
    public function getOrderDetails($order_id)
    {
        $query=$this->orders->with('order_details')->where("id",$order_id)->get();
    }

}