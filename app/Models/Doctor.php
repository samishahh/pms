<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'mobileno',
        'qualification',
    ];

    public function appointment()
    {
        return $this->hasMany('App\Models\Appointment', 'doctor_id');
    }
}
