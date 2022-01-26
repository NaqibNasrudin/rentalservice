<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('cust_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->string('cust_fname');
            $table->string('cust_lname');
            $table->string('cust_email');
            $table->string('cust_phoneno');
            $table->date('date_start');
            $table->date('date_return');
            //$table->integer('vehicle_id')->unsigned();
            $table->foreign('vehicle_id')->references('vehicle_id')->on('vehicles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
