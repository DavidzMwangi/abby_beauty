<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function js(){
        return view('charts.chartjs');
    }
    public function morris(){
        return view('charts.morris');
    }
    public function flot(){
        return view('charts.flot');
    }
    public function inline(){
        return view('charts.inline');
    }
}
