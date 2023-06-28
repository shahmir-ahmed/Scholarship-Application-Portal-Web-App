<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;
    
    // fillable fields
    protected $fillable = ['scholarship_name', 'scholarship_desc', 'scholarship_eligibility_criteria', 'scholarship_last_date'];

    // primary key
    protected $primaryKey = 'scholarship_id';
}
