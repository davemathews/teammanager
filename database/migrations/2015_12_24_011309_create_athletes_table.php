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
            $table->integer('weight');
            $table->integer('age');
            $table->date('dob');
            $table->boolean('signed');
            $table->date('signed_date');
            $table->decimal('amount', 5, 2);
            $table->integer('high_school_graduation_year');
            $table->integer('college_graduation_year');
            $table->integer('roster_id');
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
