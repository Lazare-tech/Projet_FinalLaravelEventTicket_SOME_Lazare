<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimezoneController extends Controller
{
    //
    
    public function index()
    {
        $timezones = Timezone::Orderby('offset')->get();

        return view('timezone.timezonelist', compact('timezones'));
    }
}
