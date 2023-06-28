<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantEducationRecord extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_education_records_id	";

    protected $fillable = [
        'applicant_education_records_level_of_study',
        'applicant_education_records_institution_name',
        'applicant_education_records_per_month_fees',
        'applicant_education_records_from_date',
        'applicant_education_records_to_date',
        'applicant_education_records_gpa_division',
        'applicant_education_records_cgpa_percentage',
        'applicant_education_records_user_id',
        'applicant_education_records_scholarship_id'
    ];
}
