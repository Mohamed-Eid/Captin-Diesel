<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('job_id')->unsigned();
            
            $table->string('name');
            $table->text('responsabilities');
            $table->text('qualifications');
            $table->text('salary');
            $table->text('benefits');
            $table->text('reporting_line');
            $table->text('contract_type');

            $table->string('locale')->index();
            $table->unique(['job_id','locale']);
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_translations');
    }
}
