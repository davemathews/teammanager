<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('wrestler');
            $table->text('opponent');
            $table->integer('weight')->nullable();
            $table->date('match_date')->nullable();
            $table->text('notes')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('shots_attempted')->nullable();
            $table->integer('shots_scored')->nullable();
            $table->integer('shots_against')->nullable();
            $table->integer('shots_scored_against')->nullable();
            $table->integer('reattacks_for')->nullable();
            $table->integer('reattacks_against')->nullable();
            $table->integer('counter_scores_for')->nullable();
            $table->integer('counter_scores_against')->nullable();
            $table->integer('4pt_attacks_for')->nullable();
            $table->integer('4pt_attacks_against')->nullable();
            $table->integer('front_head_attempted')->nullable();
            $table->integer('front_head_scored')->nullable();
            $table->integer('front_head_against')->nullable();
            $table->integer('front_head_scores_against')->nullable();
            $table->integer('attack_outs_for')->nullable();
            $table->integer('attack_outs_against')->nullable();
            $table->integer('takedown_to_turns_for')->nullable();
            $table->integer('takedown_to_turns_against')->nullable();
            $table->integer('guts_for')->nullable();
            $table->integer('guts_against')->nullable();
            $table->integer('laces_for')->nullable();
            $table->integer('laces_against')->nullable();
            $table->integer('high_guts_for')->nullable();
            $table->integer('high_guts_against')->nullable();
            $table->integer('other_turns_for')->nullable();
            $table->integer('other_turns_against')->nullable();
            $table->integer('pins_for')->nullable();
            $table->integer('pins_against')->nullable();
            $table->integer('tech_for')->nullable();
            $table->integer('tech_against')->nullable();
            $table->integer('decision_for')->nullable();
            $table->integer('decision_against')->nullable();
            $table->integer('shot_clock_for')->nullable();
            $table->integer('shot_clock_against')->nullable();
            $table->integer('shot_clock_against')->nullable();
            $table->integer('first_to_score')->nullable();
            $table->integer('scored_first_30')->nullable();
            $table->integer('scored_last_30')->nullable();
            $table->integer('scored_on_first_30')->nullable();
            $table->integer('scored_on_last_30')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('video_logs');
    }
}