<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mission_skill', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('mission_id')->unsigned()->index();
            $table->foreign('mission_id')->references('id')->on('missions')->onDelete('cascade');
            $table->integer('skill_id')->unsigned()->index();
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
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
        Schema::dropIfExists('mission_skill');
    }
}
