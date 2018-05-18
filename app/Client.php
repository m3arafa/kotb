<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $fillable = [
        'name',
        'number',
        'phone',
        'address',
        'credit_limit',
    ];

    public function client_payment_transactions()
    {
        return $this->hasMany('App\Client_Payment_Transaction');
    }

    public function rents()
    {
        return $this->hasMany('App\Rent');
    }

    public function contracts()
    {
        return $this->hasMany('App\Contract');
    }

    public function commission_transactions()
    {
        return $this->hasMany('App\Commission_Transaction');
    }

    public function container_transactions()
    {
        return $this->hasMany('App\Container_Transaction');
    }

}
