<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationsController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('locations.index');
    }
}
