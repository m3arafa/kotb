<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commission_Transaction extends Model
{
    protected $table = 'commission_transactions';

    protected $fillable = [
        'client_id',
        'employee_id',
        'rent_id',
        'commission_type',
        'value',
        'notes',
    ];


    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function rent()
    {
        return $this->belongsTo('App\Rent');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }


}
