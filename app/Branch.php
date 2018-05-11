<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
    public $timestamps = false;

    #branch belongs to item
//    public function item()
//    {
//       return $this->belongsTo(Item::class, 'item_id', 'id');
//    }

    public function item()
    {
        $item = Item::find($this->item_id);
        return $item;
    }

    /*

    $branch = Branch::find(12);
    $branch->item->name;


    $branch = Branch::find(12);
    $item = $branch->item();


     */
}

