<?php

namespace App\Exports;

use App\Entrance;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class EntrancesExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $entrances = DB::table('entrances')->select('price', 'hourEntrance')->get();
        return $entrances;
    }
    public function headings():array{
        return [
            'Precio',
            'Hora de entrada'
            
        ];
    }
}
