<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function contact()
    {
        return view('menu.contact');
    }
    public function faq(){
        return view('menu.faq');
    }
    public function apropos()
    {
        return view('menu.apropos');
    }
}
