<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantAssetMonthlyIncome extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_asset_monthly_incomes_id";

    protected $fillable = [
        'applicant_asset_monthly_incomes_type',
        'applicant_asset_monthly_incomes_to_father',
        'applicant_asset_monthly_incomes_to_mother',
        'applicant_asset_monthly_incomes_to_spouse',
        'applicant_asset_monthly_incomes_to_self',
        'applicant_asset_monthly_incomes_to_other',
        'applicant_asset_monthly_incomes_user_id',
        'applicant_asset_monthly_incomes_scholarship_id',
    ];
}
