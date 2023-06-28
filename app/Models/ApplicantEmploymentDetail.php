<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantEmploymentDetail extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_employment_id";

    protected $fillable = [
        'applicant_employment_designation',	
        'applicant_employment_company_name',	
        'applicant_employment_gross_income',	
        'applicant_employment_monthly_income',	
        'applicant_employment_telephone_number',	
        'applicant_employment_email',	
        'applicant_employment_user_id',
        'applicant_employment_scholarship_id',
    ];
}
