<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_sales', function (Blueprint $table) {
            $table->id();
            $table->integer('sale_id')->unsigned(); //parent foreign //unsigned required
            $table->integer('product_id')->unsigned(); //parent foreign //unsigned required
            $table->integer('quantity');
            $table->decimal('unit_price',6,2);
            $table->decimal('amount',6,2);
            $table->dateTime('created');

            //forenign key map
            $table->foreign('sale_id')->references('id')->on('sales');
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
        Schema::dropIfExists('items_sales');
    }
}
