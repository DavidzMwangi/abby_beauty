<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function data(){
        return view('tables.data');
    }
    public function simple(){
        return view('tables.simple');
    }
}
