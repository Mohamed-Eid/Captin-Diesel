<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpectationTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expectation_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('expectation_id')->unsigned();
            
            $table->string('name');

            $table->string('locale')->index();
            $table->unique(['expectation_id','locale']);
            $table->foreign('expectation_id')->references('id')->on('expectations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expectation_translations');
    }
}
