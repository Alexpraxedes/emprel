<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = ['meal_qty', 'sick_qty', 'checked_hospital_qty', 'death_qty', 'place_care', 'suspicious_meal'];;

    public function complainer()
    {
       return $this->belongsTo(Complainer::class);
    }
}
