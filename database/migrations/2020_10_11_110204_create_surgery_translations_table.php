<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurgeryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgery_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('surgery_id')->unsigned();
            $table->string('name');
            $table->text('body');
            $table->string('locale')->index();
            $table->unique(['surgery_id','locale']);
            $table->foreign('surgery_id')->references('id')->on('surgeries')->onDelete('cascade');

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
        Schema::dropIfExists('surgery_translations');
    }
}
