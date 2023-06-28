<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantFamilyMemberCurrentlyStudyingDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'applicant_family_member_currently_studying_detail_id';

    protected $fillable = [
        'applicant_family_member_currently_studying_detail_name',
        'applicant_family_member_currently_studying_detail_relation',
        'applicant_family_member_currently_studying_detail_institution',
        'applicant_family_member_currently_studying_detail_fpm',
        'applicant_family_member_currently_studying_detail_user_id',
        'applicant_family_member_currently_studying_detail_scholarship_id',
    ];
    
}
