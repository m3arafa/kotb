<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    #item has Many Branches
//    public function branches()
//    {
//        return $this->hasMany(Branch::class, 'item_id', 'id');
//    }


    public function branches()
    {
        $branches = Branch::where('item_id', $this->id)->get();
        return $branches;
    }
    /*

    */
}
