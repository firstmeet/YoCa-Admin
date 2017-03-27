<?php
namespace App\Repositories;
use App\OrderDetails;

/**
 * Created by PhpStorm.
 * User: yun
 * Date: 2017/3/27
 * Time: 21:42
 */
class OrderDetailsRepository
{
         private $order_details;
         public function __construct(OrderDetails $details)
         {
             $this->order_details=$details;
         }

         /*
          * get order_details
          *
          * @param $order_id
          *
          * @param $user_id
          *
          * @return order_details
          */

}