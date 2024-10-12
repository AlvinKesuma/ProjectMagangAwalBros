<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectiveSurgeryDelay30Min extends Model
{
    use HasFactory;

    protected $table = 'elective_surgery_delays_30_Min';

    protected $fillable = [
        'unit',
        'num',
        'denum',
        'year'
    ];
}
