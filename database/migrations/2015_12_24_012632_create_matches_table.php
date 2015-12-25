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
            $table->integer('weight')->nullable();
            $table->boolean('result')->nullable();
            $table->boolean('tech')->nullable();
            $table->boolean('pin')->nullable();
            $table->integer('pin_time')->nullable();
            $table->integer('team_points')->nullable();
            $table->integer('score_for')->nullable();
            $table->integer('score_against')->nullable();
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
