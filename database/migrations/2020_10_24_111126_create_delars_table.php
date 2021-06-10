<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delars', function (Blueprint $table) {
            $table->increments('id');

            $table->string('contact_info');
            $table->text('map');

            $table->integer('city_id')->unsigned();

            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

            $table->integer('area_id')->unsigned();

            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');

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
        Schema::dropIfExists('delars');
    }
}
