<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantWorthAsset extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_worth_assets_id";

    protected $fillable = [
        'applicant_worth_assets_asset_title',
        'applicant_worth_assets_to_father',
        'applicant_worth_assets_to_mother',
        'applicant_worth_assets_to_spouse',
        'applicant_worth_assets_to_guardian',
        'applicant_worth_assets_user_id',
        'applicant_worth_assets_scholarship_id'
    ];
}
