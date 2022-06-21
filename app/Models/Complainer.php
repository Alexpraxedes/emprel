<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complainer extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['description', 'observations', 'name', 'adress', 'complement', 'province', 'city', 'state', 'zip_code', 'phone_number', 'email'];

    public function event()
    {
        return $this->hasOne(Event::class);
    }

    public function information()
    {
        return $this->hasOne(Information::class);
    }
}
