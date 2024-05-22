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
        $trains = Train::where('departure_time', 'LIKE', '2024-05-24%')->get();
        return view('today', compact('trains'));
    }
}
