<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')->references('id')->on('properties');
            $table->integer('rate_id')->unsigned();
            $table->foreign('rate_id')->references('id')->on('rates');
            $table->dateTime('created_at');
            $table->integer('created_by');
            $table->timestamp('updated_at');
            $table->integer('updated_by');
            $table->dateTime('deleted_at')->nullable();
            $table->integer('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_rates');
    }
}
