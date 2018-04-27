<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index(){
       return view('index');
   }
   public function index2(){
       return view('index2');
   }



}
