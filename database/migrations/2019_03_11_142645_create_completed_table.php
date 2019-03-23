<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompletedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completed', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('completed_user_id')->unsigned()->index();
            $table->foreign('completed_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('mission_id')->unsigned()->index();
            $table->foreign('mission_id')->references('id')->on('missions')->onDelete('cascade');
            $table->integer('work_times');
            $table->date('start_time')->nullable();
            $table->date('end_time')->nullable();
            $table->boolean('payment');
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
        Schema::dropIfExists('completed');
    }
}
