<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
//    public $timestamps = false;

    protected $fillable = [
        'name',
        'address',
        'logo',
    ];


    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function containers()
    {
        return $this->hasMany('App\Container');
    }


}

