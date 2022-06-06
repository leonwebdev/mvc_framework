<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $title = 'Home';
        $tagline = 'This is Home Page!';

        return view('home', compact('title', 'tagline'));
    }

    public function mine()
    {
        $title = 'Mine';
        $tagline = 'This is Mine Page!';

        return view('mine', compact('title', 'tagline'));
    }

    public function timeline()
    {
        $title = 'Timeline';
        $tagline = 'This is Timeline Page!';

        return view('timeline', compact('title', 'tagline'));
    }

    public function community()
    {
        $title = 'Community';
        $tagline = 'This is Community Page!';

        return view('community', compact('title', 'tagline'));
    }

    public function newsletter()
    {
        $title = 'Newsletter';
        $tagline = 'This is Newsletter Page!';

        return view('newsletter', compact('title', 'tagline'));
    }
}
