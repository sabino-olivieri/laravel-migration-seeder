<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Models\Train;

class AlredyLeftController extends Controller
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
        'deleted')->where('departure_date', '<' , DATE_FORMAT(NOW(), "Y-m-d"))->orderBy('departure_date', 'asc')->orderBy('departure_time', 'asc')->get();

        foreach ($trainList as $train) {
            $date = new DateTime($train['departure_date']);
            $train['departure_date'] = DATE_FORMAT($date, "d/m/y");

            $departure_time = new DateTime($train['departure_time']);
            $train['departure_time'] = $departure_time->format('H:i');

            $arrival_time = new DateTime($train['arrival_time']);
            $train['arrival_time'] = $arrival_time->format('H:i');
            $train['train_code'] = strtoupper($train['train_code']);

            $train['is_on_time'] = $train['is_on_time'] === 1 ? 'SI' : 'NO';
            $train['deleted'] = $train['deleted'] === 1 ? 'SI' : 'NO';
        }

        return view('alredyLeft', compact('trainList'));
    }
}
