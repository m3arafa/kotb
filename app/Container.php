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


    public function branch(){
        $this->belongsTo('App\Branch');
    }
}
