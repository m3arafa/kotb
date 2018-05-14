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



}
