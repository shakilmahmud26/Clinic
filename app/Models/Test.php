<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'cpt_code',
        'lonic_code',
        'code',
        'name',
        'short_name',
        'test_group',
        'sample_type',
        'display_order',
        'price_a',
        'price_b',
        'price_c',
        'price_d'
    ];
}
