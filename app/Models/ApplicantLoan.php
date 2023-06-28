<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantLoan extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_loans_id";

    protected $fillable = [
        'applicant_loans_loan_one_reason',
        'applicant_loans_loan_two_reason',
        'applicant_loans_loan_three_reason',
        'applicant_loans_user_id',
        'applicant_loans_scholarship_id'
    ];
}
