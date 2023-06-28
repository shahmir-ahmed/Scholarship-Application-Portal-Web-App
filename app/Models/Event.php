<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['event_name', 'event_location', 'event_date', 'event_time', 'event_desc'];

    protected $primaryKey = 'event_id';
}
