<?php

use Illuminate\Database\Seeder;
use App\Catalogs;

class CatalogSeeder extends Seeder
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
            $data['catalog_name']=$i;
            $data['pic']=public_path('images/'.$i.'.jpg');
            $data['description']=$i;
            $data['status']=1;
            Catalogs::create($data);
        }
    }
}
