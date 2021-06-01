<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->increments('applicationNumber');
            $table->string('applicant name');
            $table->mediumInteger('admissionNumber');
            $table->mediumInteger('IdNumber');
            $table->string('productName');
            $table->tinyText('condition')->default('New');
            $table->smallInteger('borrowDuration')->default(2);
            $table->date('returnDate');
            $table->tinyText('Returned')->default('Not Returned');
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
        Schema::dropIfExists('borrows');
    }
}
