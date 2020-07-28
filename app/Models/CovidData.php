<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CovidData extends Model
{
    protected $guarded = [];

    public function validateCovidData()
    {
        $data = [
//            'lat' => ['string', 'nullable'],
//            'lng' => ['string', 'nullable'],
            'lang' => ['in:english,nepali'],
            'age' => ['string', 'required'],
            'gender' => ['in:male,female,others'],
            'temperature' => ['in:normal,fever,high_fever,others'],
            'dry_cough' => ['in:0,1'],
            'loss_or_diminished_sense_of_smell' => ['in:0,1'],
            'sore_throat' => ['in:0,1'],
            'weakness' => ['in:0,1'],
            'change_in_appetite' => ['in:0,1'],
            'none_of_symptom' => ['in:0,1'],
            'moderate_to_severe_cough' => ['in:0,1'],
            'feeling_breathless' => ['in:0,1'],
            'difficulty_in_breathing' => ['in:0,1'],
            'drowsiness' => ['in:0,1'],
            'persistant_pain_and_pressure_in_chest' => ['in:0,1'],
            'severe_weakness' => ['in:0,1'],
            'none_of_additional_symptom' => ['in:0,1'],
            'no_travel_history' => ['in:0,1'],
            'no_contact_with_anyone_with_symptom' => ['in:0,1'],
            'history_of_travel_in_affected_geographical_area_in_last_14Days' => ['in:0,1'],
            'close_contact_With_Confirmed_covid_in_Last_14Days' => ['in:0,1'],
            'diabetes' => ['in:0,1'],
            'high_blood_pressure' => ['in:0,1'],
            'heart_disease' => ['in:0,1'],
            'kidney_disease' => ['in:0,1'],
            'lung_disease' => ['in:0,1'],
            'stroke' => ['in:0,1'],
            'reduced_immunity' => ['in:0,1'],
            'non_of_diseases' => ['in:0,1'],
            'improved' => ['in:0,1'],
            'no_change' => ['in:0,1'],
            'worsened' => ['in:0,1'],
            'worsened_considerably' => ['in:0,1'],
            'total_point' => ['numeric'],
            'score' => ['numeric'],
            'report_of' => ['in:self,others',],
            'state' => ['in:province_1,province_2,province_3_bagmati,province_4_gandaki,province_5,province_6_karnali,province_7_sudurpachim,abroad'],
            'phone' => ['string', 'nullable']
        ];
        return $data;
    }
}
