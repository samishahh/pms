<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable=[
      'date',
      'patient_id',
      'doctor_id',
    ];

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor');
    }
}
