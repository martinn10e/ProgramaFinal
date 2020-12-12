<?php

namespace App\Exports;

use App\Movie;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class MoviesExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $movies = DB::table('movies')->select('name', 'director', 'genre', 'duration')->get();
        return $movies;
    }
    public function headings():array{
        return [
            'Pelicula',
            'Directores',
            'Genero',
            'Duración'
        ];
    }
    
}
