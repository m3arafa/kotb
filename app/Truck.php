<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $table = 'trucks';

    protected $fillable = [
        'employee_id',
        'number',
        'read_now',
        'oil_change_from',
        'oil_change_to',
        'kamashat_change_date',
        'battery_change_date',
        'ghatas_air_from_date',
        'ghatas_air_to_date',
        'cover_change_date',
        'air_condition_change_date',
        'end_deal_paper_date',
        'end_insurance_date',
        'end_work_card_date',
        'notes'
    ];

    public function employee()
    {
        return $this->belongsTo('App\Truck');
    }
}
