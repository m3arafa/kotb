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
}
