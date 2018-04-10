<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('store_code');
            $table->bigInteger('item_id');
            $table->string('item_description');
            $table->integer('soh_qty');
            $table->float('cost_price');
            $table->float('retail_price');
            $table->integer('sale30_qty');
            $table->integer('sale60_qty');
            $table->integer('sale90_qty');
            $table->date('expired_date');
            $table->date('lastsale_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("users");
        Schema::dropIfExists('products');
    }
}
