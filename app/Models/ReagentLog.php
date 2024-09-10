<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReagentLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'instrument',
        'test_name',
        'lot_number',
        'test_per_kit',
        'date_opened',
        'expiration',
        'unit',
        'reference_range_from',
        'reference_range_to',
        'panic_value_high',
        'panic_value_low',
    ];
}
