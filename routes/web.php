<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/trips/{user}','DisplayController@trips')->name('trips');
Route::get('/trip/{trip_id}','DisplayController@trip')->name('trip');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//trying to follow this tutorial for crud
//https://itsolutionstuff.com/post/laravel-56-crud-application-for-starterexample.html

//learn new things
//https://laravel.com/docs/5.6/controllers#resource-controllers
// /Next, you may register a resourceful route to the controller: this is a resourceful route
Route::resource('/home/trips','TripController3');


//home routes
//Route::get('/home/trip/create', 'TripController@create')->name('createTrip');
//Route::get('/home/trip/createDisplay', 'TripController@createDsiplay')->name('createTripDisplay');
//Route::get('/home/trip/editlist', 'TripController@editList')->name('editTripList');
