<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('father_name');
            $table->string('family_name');
            $table->string('natio');
            $table->string('id_card_number');
            $table->date('id_card_date');
            $table->char('sex', 1);
            $table->date('b_date');
            $table->string('b_place');
            $table->string('res_place');
            $table->string('edu_qualification');
            $table->string('spec');
            $table->string('academic_graduate');
            $table->string('graduation_year');
            $table->string('philo_interest');
            $table->string('study_title');
            $table->string('phone');
            $table->string('email');
            $table->longText('study_proposal');
            $table->string('references');
            $table->string('examples')->nullable();
            $table->string('cv');
            $table->string('profile_pic');
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
        Schema::dropIfExists('registrations');
    }
};
