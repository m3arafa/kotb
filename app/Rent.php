<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $table = 'rents';

    protected $fillable = [
        'client_id',
        'driver_id',
        'supervisor_id',
        'contract_id',
        'container_id',
        'client_name',
        'client_phone',
        'driver_commission',
        'supervisor_commission',
        'cost',
        'from_date',
        'to_date',
        'bill_number',
        'emptying_date',
        'address',
    ];


    public function container()
    {
        return $this->belongsTo('App\Container');
    }

    public function employees()
    {
        return $this->belongsToMany('App\Employee');
    }

    public function commission_transactions()
    {
        return $this->hasMany('App\Commission_Transaction');
    }

    public function client()
    {
        return $this->belongsTo('App\client');
    }

}
