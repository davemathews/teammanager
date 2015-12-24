<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id');
            $table->integer('roster_id');
            $table->integer('athlete_id');
            $table->integer('weight');
            $table->boolean('result');
            $table->boolean('tech');
            $table->boolean('pin');
            $table->integer('pin_time');
            $table->integer('team_points');
            $table->integer('score_for');
            $table->integer('score_against');
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
        Schema::drop('matches');
    }
}
