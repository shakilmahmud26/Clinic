<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'instrument',
        'control_name',
        'date_opened',
        'expiration',
        'lot_number',
        'unit',
        'level',
        'average_mean',
        'range_from',
        'range_to',
        'qc_range',
        'standard_deviation',
    ];
}
