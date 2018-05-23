<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController2 extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Create Trip Display
     *
     * @return \Illuminate\Http\Response
     */
    public function createDisplay()
    {
        return view('home.tripCreate');
    }


    /**
     * Create Trip
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }
}
