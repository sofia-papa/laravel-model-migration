<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolidayController extends Controller
{
    public function index(){
        $holidays = [];
        $title = 'Pacchetto vacanze di natale';
        return view('home', compact('holidays', 'title'));
    }
}
