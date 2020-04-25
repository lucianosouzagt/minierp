<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('purchase_id')->unsigned(); //parent foreign //unsigned required
            $table->integer('product_id')->unsigned(); //parent foreign //unsigned required
            $table->integer('quantity');
            $table->dateTime('created');

            //forenign key map
            $table->foreign('purchase_id')->references('id')->on('purchases');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_purchases');
    }
}
