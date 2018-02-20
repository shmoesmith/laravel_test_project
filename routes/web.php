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
//grab list of vacations to pass to the view through the compact technique
$vacations = DB::table('vacations')->get();
 // return welcome view and pass through a greeting as a variable to it
    return view('vacations.index', ['greeting' => 'Welcome to a vacation site to test out Laravel'], compact('vacations'));
});

//create route that uses a specific id of a vacation.  pass that ID into the function so we can search for it
Route::get('/vacation/{id}', function ($id) {
  $vacation = DB::table('vacations')->find($id);
  return view('vacations.show_vacation', compact('vacation'));
});

Route::get('/about', function () {
// return an about view and pass through an array to it using the 'compact' technique
  $points = [
    'Create a Laravel project',
    'Use MySQL for the Database',
    'Create Models in Laravel',
    'Create Controllers in Laravel',
    'Use Laravel for the views'
  ];
  return view('about', compact('points'));
});
