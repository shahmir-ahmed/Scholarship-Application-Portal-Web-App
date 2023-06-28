<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantOtherScholarship extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_other_scholarships_id";

    protected $fillable = [
        'applicant_other_scholarships_institution_name',
        'applicant_other_scholarships_name',
        'applicant_other_scholarships_total_amount',
        'applicant_other_scholarships_total_period',
        'applicant_other_scholarships_class_level_granted',
        'applicant_other_scholarships_purpose',
        'applicant_other_scholarships_user_id',
        'applicant_other_scholarships_scholarship_id'
    ];
}
