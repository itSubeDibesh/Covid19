<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidUserInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid_data', function (Blueprint $table) {
            $table->id();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->enum('lang', ['english','nepali'])->default('nepali');
            $table->string('age');
            $table->enum('gender', ['male','female','others'])->default('male');
            $table->enum('temperature', ['normal','fever','high_fever','others'])->default('normal');
            $table->boolean('dry_cough')->default('0');
            $table->boolean('loss_or_diminished_sense_of_smell')->default('0');
            $table->boolean('sore_throat')->default('0');
            $table->boolean('weakness')->default('0');
            $table->boolean('change_in_appetite')->default('0');
            $table->boolean('none_of_symptom')->default('0');
            $table->boolean('moderate_to_severe_cough')->default('0');
            $table->boolean('feeling_breathless')->default('0');
            $table->boolean('difficulty_in_breathing')->default('0');
            $table->boolean('drowsiness')->default('0');
            $table->boolean('persistant_pain_and_pressure_in_chest')->default('0');
            $table->boolean('severe_weakness')->default('0');
            $table->boolean('none_of_additional_symptom')->default('0');
            $table->boolean('no_travel_history')->default('0');
            $table->boolean('no_contact_with_anyone_with_symptom')->default('0');
            $table->boolean('history_of_travel_in_affected_geographical_area_in_last_14Days')->default('0');
            $table->boolean('close_contact_With_Confirmed_covid_in_Last_14Days')->default('0');
            $table->boolean('diabetes')->default('0');
            $table->boolean('high_blood_pressure')->default('0');
            $table->boolean('heart_disease')->default('0');
            $table->boolean('kidney_disease')->default('0');
            $table->boolean('lung_disease')->default('0');
            $table->boolean('stroke')->default('0');
            $table->boolean('reduced_immunity')->default('0');
            $table->boolean('non_of_diseases')->default('0');
            $table->boolean('improved')->default('0');
            $table->boolean('no_change')->default('0');
            $table->boolean('worsened')->default('0');
            $table->boolean('worsened_considerably')->default('0');
            $table->string('total_point');
            $table->string('score');
            $table->enum('report_of', ['self','others'])->default('self');
            $table->enum('state',['province_1','province_2','province_3_bagmati','province_4_gandaki','province_5','province_6_karnali','province_7_sudurpachim','abroad'])->default('province_3_bagmati');
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('covid_user_info');
    }
}
