<?php

namespace App\Http\Controllers\Admin;

use App\Models\Phone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::all();
        $title = 'Administrate Dashboard';
        return view('admin/index', compact('phones', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create A New Phone';
        return view('admin/create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|string',
            'screen' => 'required|string',
            'battery' => 'required|integer',
            'image' => 'required|image',
            'description' => 'required|string'
        ]);

        if ($request->file('image')) {
            $path = $request->file('image')->store('public');
        }

        $valid['image'] = basename($path ?? 'default.jpg');
        //dd($path);
        Phone::create($valid);

        session()->flash('success', 'Phone successfully created!');

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phone = Phone::find($id);
        if ($phone->delete()) {
            session()->flash('success', 'Phone was deleted');
            return redirect('/admin');
        }
        session()->flash('error', 'There was a problem deleting the phone');
        return redirect('/admin');
    }
}