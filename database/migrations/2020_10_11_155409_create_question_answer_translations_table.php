<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionAnswerTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_answer_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('question_answer_id')->unsigned();
            
            $table->text('question');
            $table->text('answer');

            $table->string('locale')->index();
            $table->unique(['question_answer_id','locale']);
            $table->foreign('question_answer_id')->references('id')->on('question_answers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_answer_translations');
    }
}
