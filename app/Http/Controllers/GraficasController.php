<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Room;
use App\Consumable;
use App\Entrance;
use\App\Funtion;

class GraficasController extends Controller
{
    public function graficarMovies(){
        $movies = Movie::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', 
        date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarMovies', compact('movies')); 
    }
    public function graficarRooms(){
        $rooms = Room::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', 
        date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarRooms', compact('rooms')); 
    }
    public function graficarConsumables(){
        $consumables = Consumable::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', 
        date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarConsumables', compact('consumables')); 
    }
    public function graficarEntrances(){
        $entrances = Entrance::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', 
        date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarEntrances', compact('entrances')); 
    }
    public function graficarFuntions(){
        $funtions = Funtion::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', 
        date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarFuntions', compact('funtions')); 
    }
}
