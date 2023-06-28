<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedScholarship extends Model
{
    use HasFactory;

    protected $primaryKey = "applied_scholarships_id";

    protected $fillable=[
        'applied_scholarships_user_id',
        'applied_scholarships_scholarship_id',
        'applied_scholarships_status',
    ];
}
