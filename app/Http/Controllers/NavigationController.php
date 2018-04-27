<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function top(){
        return view('layout_options.top-nav');
    }
}
