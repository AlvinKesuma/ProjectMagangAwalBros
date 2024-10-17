<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepatuhanIADP extends Model
{
    use HasFactory;

    protected $table = 'kepatuhan_iadp';

    protected $fillable = [
        'unit',
        'num',
        'denum',
        'year'
    ];
}
