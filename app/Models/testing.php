<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testing extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'present',
        'absent',
        'late',
        'medical',
        'substitute',
        'rg',
        'visitor',
        'tyfcb',
        'testimonial',
        'training',
        'points',
    ];
}
