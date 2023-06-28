<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantEmploymentDetails extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_employment_details_id";

    protected $fillable = [
        'applicant_employment_details_designation',	
        'applicant_employment_details_company_name',	
        'applicant_employment_details_gross_income',	
        'applicant_employment_details_monthly_income',	
        'applicant_employment_details_telephone_number',	
        'applicant_employment_details_email',	
        'applicant_employment_details_application_id',
    ];
}
