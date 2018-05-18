<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client_Payment_Transaction extends Model
{
    protected $table = 'client_payment_transactions';

    protected $fillable = [
        'client_id',
        'employee_id',
        'contract_id',
        'value',
        'type_of_payment',
        'transaction_date'
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function contract()
    {
        return $this->belongsTo('App\Contract');
    }

}
