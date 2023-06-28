<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantOtherAsset extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_other_assets_id";

    protected $fillable = [
        'applicant_other_assets_transport_type',
        'applicant_other_assets_model_no',
        'applicant_other_assets_engine_capacity',
        'applicant_other_assets_reg_no',
        'applicant_other_assets_ownership_period',
        'applicant_other_assets_user_id',
        'applicant_other_assets_scholarship_id'
    ];
}
