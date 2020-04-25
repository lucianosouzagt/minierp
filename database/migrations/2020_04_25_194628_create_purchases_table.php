<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('custom_number');
            $table->integer('provider_id')->unsigned();
            $table->string('desc');
            $table->string('input_document');
            $table->dateTime('date_purchase');
            $table->dateTime('created');

            $table->foreign('provider_id')->references('id')->on('providers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
