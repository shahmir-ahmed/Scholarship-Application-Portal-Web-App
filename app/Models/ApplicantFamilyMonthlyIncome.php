<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantFamilyMonthlyIncome extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_family_monthly_incomes_id";

    protected $fillable = [
        'applicant_family_monthly_incomes_member_name',
        'applicant_family_monthly_incomes_member_relation',
        'applicant_family_monthly_incomes_member_monthly_asset_income',
        'applicant_family_monthly_incomes_member_monthly_gross_income',
        'applicant_family_monthly_incomes_member_monthly_net_income',
        'applicant_family_monthly_incomes_user_id',
        'applicant_family_monthly_incomes_scholarship_id',
    ];
}
