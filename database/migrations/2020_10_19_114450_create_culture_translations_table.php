<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCultureTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('culture_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('culture_id')->unsigned();
            
            $table->string('name');
            $table->string('job');
            $table->text('body');

            $table->string('locale')->index();
            $table->unique(['culture_id','locale']);
            $table->foreign('culture_id')->references('id')->on('cultures')->onDelete('cascade');
  


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
        Schema::dropIfExists('culture_translations');
    }
}
