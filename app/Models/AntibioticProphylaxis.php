<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntibioticProphylaxis extends Model
{
    use HasFactory;

    protected $table = 'antibiotic_prophylaxis';

    protected $fillable = ['unit', 'num', 'denum', 'year'];
}
