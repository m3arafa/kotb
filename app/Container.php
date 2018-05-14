<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    protected $table = 'containers';


    public function branch(){
        $this->belongsTo('App\Branch');
    }
}
