<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contracts';

    protected $fillable = [
        'client_id',
        'number',
        'address',
        'trip_days',
        'num_of_containers',
        'type_of_payment',
        'from_date',
        'to_date',
        'cost',
        'paid',
        'remainder',
    ];

    public function rents()
    {
        return $this->hasMany('App\Rent');
    }

    public function client_payment_transactions()
    {
        return $this->hasMany('App\Client_Payment_Transaction');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function container_transactions()
    {
        return $this->hasMany('App\Container_Transaction');
    }

}
