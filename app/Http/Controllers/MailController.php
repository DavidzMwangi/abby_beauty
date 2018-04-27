<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function compose(){
        return view('mailbox.compose');
    }
    public function mailbox(){
        return view('mailbox.mailbox');
    }
    public function read(){
        return view('mailbox.read-mail');
    }
}
