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
            $table->integer('weight')->default(0);
            $table->boolean('result')->default(0);
            $table->boolean('tech')->default(0);
            $table->boolean('pin')->default(0);
            $table->integer('pin_time')->nullable();
            $table->integer('team_points')->default(0);
            $table->integer('score_for')->default(0);
            $table->integer('score_against')->default(0);
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
