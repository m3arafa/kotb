<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'name',
        'job',
        'residency_number',
        'residency_end_date',
        'license_end_date',
        'medical_insurance_end_date',
        'passport_end_date'
    ];
}
