<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointmentDate',
        'appointmentSection',
        'appointmentStatus',
        'meetingLink',
        'user_id_patient',
        'user_id_psychologist',
        'payment_id',
    ];

    public function payment(){
        return $this->hasMany(Payment::class);
    }

    public function patient(){
        return $this->belongsTo(User::class, 'user_id_patient');
    }

    public function psychologist(){
        return $this->belongsTo(User::class, 'user_id_psychologist');
    }
}
