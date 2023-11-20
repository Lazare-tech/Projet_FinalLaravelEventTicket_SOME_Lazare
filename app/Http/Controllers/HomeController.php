<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;

class HomeController extends Controller
{
    //
    public function index()
    {
        $evenements= Evenement::all();
        
        return view('index',compact('evenements'));
    }
}
