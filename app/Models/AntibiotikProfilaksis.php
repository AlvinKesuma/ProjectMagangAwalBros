<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntibiotikProfilaksis extends Model
{
    use HasFactory;

    protected $table = 'antibiotik_profilaksis';

    protected $fillable = ['unit', 'num', 'denum', 'year'];
}
