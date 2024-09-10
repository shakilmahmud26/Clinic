<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Physician extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_no',
        'facility_name',
        'account_representative',
        'first_name',
        'last_name',
        'pcp_no',
        'npi_no',
        'street_address',
        'city',
        'state',
        'zip_code',
        'clinic_name',
        'office_name',
        'fax_no',
        'phone_no',
        'notify_1',
        'notify_2',
    ];
}