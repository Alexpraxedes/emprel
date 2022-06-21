<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

     protected $fillable = ['event_adress', 'event_complement', 'event_province', 'event_city', 'event_state', 'event_zip_code', 'event_phone_number', 'school_level', 'ocuppation', 'event_date', 'name', 'race', 'qty', 'age'];

     public function complainer()
     {
        return $this->belongsTo(Complainer::class);
     }
}
