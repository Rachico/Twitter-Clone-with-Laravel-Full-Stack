<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    public $timestamps = false;

    protected $fillable = [

        'utility_name',
        'Period',
        'Employees',
        'Capital',
        'maintenanceCosts',
        'Sales',
        'otherRevenue'
    ];


}
