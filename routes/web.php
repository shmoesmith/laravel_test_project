<?php

//using route WITH a controller to get index of all vacations.
Route::get('/', 'VacationsController@index');


//using route WITHOUT a controller.
// Route::get('/', function () {
// //grab list of vacations from database using DB::table method (query builder method) to pass to the view through the compact technique
// //$vacations = DB::table('vacations')->get();
//
// //grab list of vacations from database using eloquent model method(referencing model name) to pass to the view through the compact technique
// $vacations = App\Vacation::all();
//
//  // return welcome view and pass through a greeting as a variable to it as well as all vacations grabbed above.
//     return view('vacations.index', ['greeting' => 'Welcome to a vacation site to test out Laravel'], compact('vacations'));
// });


//using route WITH a controller to get specic vacation by ID
Route::get('/vacations/{id}', 'VacationsController@show');

// using route WITHOUT a controller
// //create route that uses a specific id of a vacation.  pass that ID into the function so we can search for it
// Route::get('/vacation/{id}', function ($id) {
//   //get specific vacation by id using query biulder method
//   //$vacation = DB::table('vacations')->find($id);
//
//   //get specific vacation by id using the namespaced Model
//   $vacation = App\Vacation::find($id);
//
//   return view('vacations.show_vacation', compact('vacation'));
// });




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
