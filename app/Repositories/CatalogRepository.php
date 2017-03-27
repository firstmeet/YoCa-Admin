<?php
namespace App\Repositories;
use App\Catalogs;


/**
 * Created by PhpStorm.
 * User: yun
 * Date: 2017/3/27
 * Time: 21:42
 */
class CatalogRepository
{
       private $catalog;
       public function __construct(Catalogs $catalogs)
       {
           $this->catalog=$catalogs;
       }
       /*
        * get goods with catalog
        *
        * @param $catalog_id;
        *
        * @return goods
        */
       public function getGoodsFromCatalog($catalog_id)
       {
           $query=$this->catalog->with("goods")->whereId($catalog_id)->get();
           return $query;

       }

}