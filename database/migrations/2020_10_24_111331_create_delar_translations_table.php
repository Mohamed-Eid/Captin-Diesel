<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDelarTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delar_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('delar_id')->unsigned();

            $table->string('name');
            $table->string('address');

            
            $table->string('locale')->index();
            $table->unique(['delar_id','locale']);
            $table->foreign('delar_id')->references('id')->on('delars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delar_translations');
    }
}
