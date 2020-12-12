<?php

namespace App\Exports;

use App\Consumable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class ConsumablesExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $consumables = DB::table('consumables')->select('name', 'price', 'quantity')->get();
        return $consumables;
    }
    public function headings():array{
        return [
            'Alimento',
            'Precio',
            'Cantidad'
            
        ];
    }
}
