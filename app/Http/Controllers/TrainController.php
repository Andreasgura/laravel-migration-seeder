<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('home', compact('trains'));
    }

    public function showTodayDepartures()
    {
        $trains = Train::where('departure_time', '=', 'now()')->get();
        return view('today', compact('trains'));
    }
    public function chooseDepartureArrival($departureStation, $arrivalStation)
    {
        $trains = Train::where('departure_station', $departureStation)
            ->where('arrival_station', $arrivalStation)->get();
        return view('romeToNaples', compact('trains'));
    }
       
        


  
    
}
