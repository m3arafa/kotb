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

    public function truck()
    {
        return $this->hasOne('App\Truck');
    }

    public function container_transactions()
    {
        return $this->hasMany('App\Container_Transaction');
    }

    public function rents()
    {
        return $this->belongsToMany('App\Rent');
    }

    public function commission_transaction()
    {
        return $this->belongsTo('App\Commission_Transaction');
    }

    public function spending_transactions()
    {
        return $this->hasMany('App\Spending_Transaction');
    }

}
