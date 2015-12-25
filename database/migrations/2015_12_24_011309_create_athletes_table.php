<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('weight')->nullable();
            $table->integer('age')->nullable();
            $table->date('dob')->nullable();
            $table->boolean('signed')->nullable();
            $table->date('signed_date')->nullable();
            $table->decimal('amount', 7, 2)->nullable();
            $table->integer('high_school_graduation_year')->nullable();
            $table->integer('college_graduation_year')->nullable();
            $table->integer('roster_id')->nullable();
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
        Schema::drop('athletes');
    }
}
