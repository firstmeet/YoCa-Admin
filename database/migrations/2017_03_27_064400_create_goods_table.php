<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('catalog_id')->comment("分类ID");
            $table->string("small_pic")->comment("缩略图");
            $table->string("pic")->comment("展示图");
            $table->string('goods_name')->comment("商品名");
            $table->char("price")->comment("价格");
            $table->integer('integration')->comment("可以兑换多少积分")->default(0);
            $table->integer("status")->comment("1：上架 0：下架")->default(1);
            $table->integer("amount")->comment("数量");
            $table->integer("stock")->comment("库存");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods');
    }
}
