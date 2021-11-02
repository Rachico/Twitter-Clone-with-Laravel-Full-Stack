<?php

namespace App\Exports;

use App\Plant;
use Maatwebsite\Excel\Concerns\FromCollection;

class PlantsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Plant::all();
    }
}
