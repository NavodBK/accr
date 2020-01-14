<?php

namespace App\Http\Controllers;

use App\report;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index(){
        $reports = report::all();
        Mapper::map(7.8731,80.7718,['marker' => false,'zoom' => 8]);
        foreach ($reports as $report) {
            Mapper::informationWindow($report->lat, $report->lon, $report->info);
//            Mapper::marker($report->lat, $report->lon);
        }
        return view('welcome');
    }

}
