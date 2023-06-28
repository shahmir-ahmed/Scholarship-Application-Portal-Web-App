<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantFatherDetail extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_father_details_id";

    protected $fillable = [
        'applicant_father_details_name',
        'applicant_father_details_CNIC',
        'applicant_father_details_vital_status',
        'applicant_father_details_job_status',
        'applicant_father_details_martial_status',
        'applicant_father_details_mobile_number',
        'applicant_father_details_occupation',
        'applicant_father_details_company_name',
        'applicant_father_details_NTS',
        'applicant_father_details_designation_grade',
        'applicant_father_details_monthly_income',
        'applicant_father_details_gross_income',
        'applicant_father_details_applicant_name',
        'applicant_father_details_applicant_relation',
        'applicant_father_details_applicant_occupation_designation',
        'applicant_father_details_applicant_monthly_financial_support',
        'applicant_father_details_user_id',
        'applicant_father_details_scholarship_id',
    ];

    // structure
    // protected $primaryKey = "";

    // protected $fillable = [
    //     ''
    // ];
}
