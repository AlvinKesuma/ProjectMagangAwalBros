<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenggunaanAPD extends Model
{
    use HasFactory;

    protected $table = 'penggunaan_apd';

    protected $guarded = ['id'];
}
