<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantSibling extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_siblings_id";

    protected $fillable = [
        'applicant_siblings_name',
        'applicant_siblings_relation',
        'applicant_siblings_institution_name',
        'applicant_siblings_fees_per_month',
        'applicant_siblings_user_id',
        'applicant_siblings_scholarship_id'
    ];
}
