<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pulau_id')->unsigned();
            $table->foreign('pulau_id')->references('id')->on('pulau');
            $table->integer('province_id')->unsigned();
            $table->foreign('province_id')->references('id')->on('province');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('city');
            $table->integer('nohp');
            $table->string('name');
            $table->string('initial');
            $table->text('address');
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
        Schema::dropIfExists('address');
    }
}
