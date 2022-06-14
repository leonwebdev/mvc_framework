<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home()
    {
        $title = 'Welcome to the WDD Blog!';
        return view('home', compact('title'));
    }

    
}
