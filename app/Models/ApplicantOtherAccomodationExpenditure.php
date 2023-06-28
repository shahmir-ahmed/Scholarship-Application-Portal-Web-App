<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantOtherAccomodationExpenditure extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_other_accomodation_expenditures_id";

    protected $fillable = [
        'applicant_other_accomodation_expenditures_telephone',
        'applicant_other_accomodation_expenditures_electricity',
        'applicant_other_accomodation_expenditures_gas',
        'applicant_other_accomodation_expenditures_water',
        'applicant_other_accomodation_expenditures_education',
        'applicant_other_accomodation_expenditures_accomodation',
        'applicant_other_accomodation_expenditures_utilities',
        'applicant_other_accomodation_expenditures_medical',
        'applicant_other_accomodation_expenditures_misc',
        'applicant_other_accomodation_expenditures_user_id',
        'applicant_other_accomodation_expenditures_scholarship_id',
    ];
}
