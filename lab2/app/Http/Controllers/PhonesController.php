<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Phone;

class PhonesController extends Controller
{
    /**
     * Show list view
     *
     * @return void
     */
    public function index()
    {
        $phones = Phone::all();
        $title = 'Phone List';

        return view('phones/index', compact('phones', 'title'));
    }

    /**
     * Show Detail
     *
     * @param string $id phone -id
     * @return void
     */
    public function show($id = null)
    {
        $phone = Phone::find($id);
        $title = $phone->name;

        return view('phones/show', compact('phone', 'title'));
    }
}