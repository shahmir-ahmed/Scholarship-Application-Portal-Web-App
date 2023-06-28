<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantPersonalDetail extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_personal_detail_id";

    protected $fillable = [
        'applicant_name',	
        'applicant_age',	
        'applicant_gender',	
        'applicant_DOB',	
        'applicant_CNIC',	
        'applicant_martial_status',	
        'applicant_domicile',	
        'applicant_present_address',	
        'applicant_permanant_address',	
        'applicant_reg_no',	
        'applicant_degree',	
        'applicant_semester',	
        'applicant_university',	
        'applicant_CGPA',	
        'applicant_user_id',	
        'applicant_scholarship_id'
    ];
}
