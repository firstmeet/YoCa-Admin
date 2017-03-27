<?php
namespace App\Repositories;
use App\Goods;

/**
 * Created by PhpStorm.
 * User: yun
 * Date: 2017/3/27
 * Time: 21:41
 */
class GoodsRepository
{
       private $goods;
         public function __construct(Goods $goods)
         {
             $this->goods=$goods;
         }


}