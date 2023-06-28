<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantFamilyMemberEarning extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_family_member_earnings_id";

    protected $fillable = [
        'applicant_family_member_earnings_id',
        'applicant_family_member_earnings_member_name',	
        'applicant_family_member_earnings_member_relation',
        'applicant_family_member_earnings_member_occupation',
        'applicant_family_member_earnings_member_organization',
        'applicant_family_member_earnings_member_designation',
        'applicant_family_member_earnings_member_monthly_income',
        'applicant_family_member_earnings_member_remarks',
        'applicant_family_member_earnings_user_id',
        'applicant_family_member_earnings_scholarship_id',
    ];
    
}
