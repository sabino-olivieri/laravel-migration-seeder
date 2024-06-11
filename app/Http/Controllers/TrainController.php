<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $trainList = Train::select('agency', 
        'departure_station',
        'arrival_station',
        'departure_date',
        'departure_time',
        'arrival_time',
        'train_code',
        'number_carriages',
        'is_on_time',
        'deleted')->where('departure_date', DATE_FORMAT(NOW(), "Y-m-d"))->get();
        return view('home', compact('trainList'));
    }
}
