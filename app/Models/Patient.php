<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'cnic',
        'dob',
        'mobileno',
        'cellno',
        'city',
        'gender',
        ];

    public function appointment()
    {
        return $this->hasMany('App\Models\Appointment', 'patient_id');
    }
}
