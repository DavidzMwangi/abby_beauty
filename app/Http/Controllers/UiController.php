<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiController extends Controller
{
    public function button(){
        return view('UI.buttons');
    }
    public function general(){
        return view('UI.general');
    }
    public function icons(){
        return view('UI.icons');
    }
    public function modals(){
        return view('UI.modals');
    }
    public function sliders(){
        return view('UI.sliders');
    }
    public function timeline(){
        return view('UI.timeline');
    }

}
