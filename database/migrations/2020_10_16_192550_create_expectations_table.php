<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpectationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expectations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();

            $table->integer('surgery_id')->nullable()->unsigned();
            $table->foreign('surgery_id')->references('id')->on('surgeries')->onDelete('cascade');

            $table->integer('category_id')->nullable()->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
        Schema::dropIfExists('expectations');
    }
}
