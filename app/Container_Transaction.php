<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Container_Transaction extends Model
{
    protected $table = 'container_transactions';

    protected $fillable = [
        'employee_id',
        'client_id',
        'contract_id',
        'container_id',
        'bill_number',
        'employee_commission',
        'address',
        'type_of_transaction',
        'transaction_date'
    ];

    public function container()
    {
        return $this->belongsTo('App\Container');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function contract()
    {
        return $this->belongsTo('App\Contract');
    }
}
