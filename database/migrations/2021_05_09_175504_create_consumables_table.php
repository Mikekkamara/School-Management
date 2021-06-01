<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumables', function (Blueprint $table) {
            $table->increments('productNumber');
            $table->string('productName');
            $table->float('unitPrice');
            $table->date('expiryDate');
            $table->date('deliveryDate');
            $table->mediumInteger('initialQuantity');
            $table->mediumInteger('life');
            $table->double('totalPrice');
            $table->mediumInteger('remainingQuantity');
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
        Schema::dropIfExists('consumables');
    }
}
