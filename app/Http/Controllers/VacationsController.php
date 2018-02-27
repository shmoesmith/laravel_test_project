<?php

namespace App\Http\Controllers;

use App\Vacation;

class VacationsController extends Controller
{
//return of index of tasks
  public function index()
  {

  //get all vacations using eloquent vacation model
    $vacations = Vacation::all();

 // return welcome view and pass through a greeting as a variable to it as well as all vacations grabbed above with compact method.
        return view('vacations.index', ['greeting' => 'Welcome to a vacation site to test out Laravel'], compact('vacations'));

  }

  public function show($id)
  {
    $vacation = Vacation::find($id);
    return view('vacations.show_vacation', compact('vacation'));
  }
}
