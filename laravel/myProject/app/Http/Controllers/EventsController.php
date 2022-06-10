<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function show($id)
    {
        $data = [
            'name' => 'Laravel Hacking and Coffee',
            'date' => date('Y-m-d')
        ];
        return view('events.show')->with($data);
    }

    public function category($category, $subcategory = 'all')
    {
        # code...
        dd("Category: {$category} Subcategory: {$subcategory}");
    }
}
