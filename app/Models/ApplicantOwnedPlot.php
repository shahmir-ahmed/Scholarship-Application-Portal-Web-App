<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantOwnedPlot extends Model
{
    use HasFactory;

    protected $primaryKey = "applicant_owned_plots_id";

    protected $fillable = [
        'applicant_owned_plots_asset_type',
        'applicant_owned_plots_quantity',
        'applicant_owned_plots_size',
        'applicant_owned_plots_location',
        'applicant_owned_plots_cultivable_area',
        'applicant_owned_plots_agricultural',
        'applicant_owned_plots_user_id',
        'applicant_owned_plots_scholarship_id',
    ];
}
