<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('languages.index');
    }
}
