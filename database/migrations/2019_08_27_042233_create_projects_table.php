<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cateId')->unsigned()->index();
            $table->foreign('cateId')->references('id')->on('categories');
            $table->string('projectName', 200);
            $table->string('featureImage', 255);
            $table->string('videoUrl')->nullable();
            $table->string('architect')->nullable();
            $table->string('surface')->nullable();
            $table->string('placement')->nullable();
            $table->integer('year')->unsigned()->nullable();
            $table->text('projectContent')->nullable();
            $table->string('poster');
            $table->tinyInteger('status')->default('1');
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
        Schema::dropIfExists('projects');
    }
}
