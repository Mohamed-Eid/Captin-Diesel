<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('department_id')->unsigned();
            
            $table->string('name');

            $table->string('locale')->index();
            $table->unique(['department_id','locale']);
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_translations');
    }
}
