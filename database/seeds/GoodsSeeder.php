<?php

use Illuminate\Database\Seeder;
use App\Goods;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<10;$i++){
            $data['catalog_id']=$i;
            $data['pic']=public_path('images/'.$i.'.jpg');
            $data['goods_name']=$i;
            $data['price']=$i*($i+1);
            $data['integration']=$i*($i+1);
            $data['amount']=$i;
            $data['stock']=$i;
            $data['status']=1;
            Goods::create($data);
        }
    }
}
