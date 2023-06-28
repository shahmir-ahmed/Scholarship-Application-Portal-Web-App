<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppplicantFamilyMembersDetails extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_family_members_id";

    protected $fillable = [
        'applicant_family_members_name',	
        'applicant_family_members_martial_status',	
        'applicant_family_members_relation'	,
        'applicant_family_members_remarks',	
        'applicant_family_members_application_id',
    ];
}
