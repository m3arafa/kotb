<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    protected $table = 'containers';

    protected $fillable = [
        'branch_id',
        'number',
        'is_empty',
        'address',
        'size',
    ];


    public function branch()
    {
        return $this->belongsTo('App\Branch');
    }

    public function rents()
    {
        return $this->hasMany('App\Rent');
    }

    public function container_transactions()
    {
        return $this->hasMany('App\Container_Transaction');
    }
}
