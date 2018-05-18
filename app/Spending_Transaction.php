<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spending_Transaction extends Model
{
    protected $table = 'spending_transactions';

    protected $fillable = [
        'spending_id',
        'employee_id',
        'transaction_date',
    ];

    public function spending()
    {
        return $this->belongsTo('App\Spending');
    }
}
