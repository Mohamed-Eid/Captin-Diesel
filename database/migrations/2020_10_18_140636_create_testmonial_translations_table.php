<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestmonialTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testmonial_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('testmonial_id')->unsigned();
            
            $table->string('name');
            $table->string('job');
            $table->text('body');

            $table->string('locale')->index();
            $table->unique(['testmonial_id','locale']);
            $table->foreign('testmonial_id')->references('id')->on('testmonials')->onDelete('cascade');
  

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
        Schema::dropIfExists('testmonial_translations');
    }
}
