<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spending extends Model
{
    protected $table = 'spending';

    protected $fillable = [
        'name',
        'value'
    ];

    public function spending_transactions()
    {
        return $this->hasMany('App\Spending_Transaction');
    }
}
