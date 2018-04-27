<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function advanced(){
        return view('forms.advanced');
    }
    public function editors(){
        return view('forms.editors');
    }
    public function general(){
        return view('forms.general');
    }

}
