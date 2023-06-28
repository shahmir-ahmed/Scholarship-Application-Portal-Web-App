<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantFamilyAccomodationExpenditure extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_family_accomodation_expenditures_id";

    protected $fillable = [
        'applicant_family_accomodation_expenditures_type',
        'applicant_family_accomodation_expenditures_status',
        'applicant_family_accomodation_expenditures_rent_payment_type',
        'applicant_family_accomodation_expenditures_plot_size',
        'applicant_family_accomodation_expenditures_address',
        'applicant_family_accomodation_expenditures_total_bed_rooms',
        'applicant_family_accomodation_expenditures_total_ACs',
        'applicant_family_accomodation_expenditures_monthly_rent',
        'applicant_family_accomodation_expenditures_annual_rent_expense',
        'applicant_family_accomodation_expenditures_total_rent_expense',
        'applicant_family_accomodation_expenditures_user_id',
        'applicant_family_accomodation_expenditures_scholarship_id',
    ];
}
