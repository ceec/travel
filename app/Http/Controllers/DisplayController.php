<?php

namespace App\Http\Controllers;

use App\Trip;
use App\User;
use Illuminate\Http\Request;

class DisplayController extends Controller
{


    /**
     * Display users trip
     *
     * @return \Illuminate\Http\Response
     */
    public function trips($user) {
      //$user can be username or id, i created that function somewhere....where???
      if (!ctype_digit($user)){
          $user = User::where('name','=',$user)->first();
          $user = $user->id;
      }

      $trips = Trip::where('user_id','=',$user)->get();

        return view('display.trips')
        ->with('trips',$trips);
    }


    /**
     * Display a trip
     *
     * @return \Illuminate\Http\Response
     */
    public function trip($trip_id) {

      $trip = Trip::find($trip_id);

        return view('display.trip')
        ->with('trip',$trip);
    }


}
