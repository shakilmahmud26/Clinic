<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qc extends Model
{
    use HasFactory;

    protected $fillable = [
        'instrument',
        'run_no',
        'run_date_time',
        'performed_by',
        'tests',
    ];

    protected $casts = [
        'tests' => 'array',
    ];
}
