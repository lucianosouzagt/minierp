<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('group_id')->unsigned(); //parent foreign //unsigned required
            $table->string('title');
            $table->text('desc');
            $table->integer('quantity');
            $table->decimal('price',6,2); //max 6 digits and 2 of it is decimal point place
            $table->string('image'); // image pacth
            $table->dateTime('created');

            //forenign key map
            $table->foreign('group_id')->references('id')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
