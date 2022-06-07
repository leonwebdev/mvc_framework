<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Phone;

class PhonesController extends Controller
{
    public function index()
    {
        $phones = Phone::all();
        $title = 'Phone List';

        return view('phones/index', compact('phones', 'title'));
    }

    public function show()
    {
        $phones = Phone::all();
        $title = 'Phone List';

        return view('phones/index', compact('phones', 'title'));
    }
}
