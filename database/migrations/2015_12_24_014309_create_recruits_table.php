<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('age')->nullable();
            $table->date('dob')->nullable();
            $table->string('high_school')->nullable();
            $table->integer('high_school_graduation_year')->nullable();
            $table->string('gpa')->nullable();
            $table->integer('act')->nullable();
            $table->integer('sat')->nullable();
            $table->boolean('reading_taken')->nullable();
            $table->string('intended_major')->nullable();
            $table->boolean('signed')->nullable();
            $table->date('signed_date')->nullable();
            $table->decimal('offer', 7, 2)->nullable();
            $table->boolean('declined')->nullable();
            $table->date('declined_date')->nullable();
            $table->string('school_declined_for')->nullable();
            $table->integer('roster_id')->nullable();
            $table->text('recruitment_form_info')->nullable();
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
        Schema::drop('recruits');
    }
}
