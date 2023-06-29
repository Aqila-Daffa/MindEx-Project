<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentalHealth extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'depScore',
        'depResult',
        'anxScore',
        'anxResult',
        'strScore',
        'strResult',
    ];
}
