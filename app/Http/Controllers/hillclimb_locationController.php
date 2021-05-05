<?php

namespace App\Http\Controllers;

use App\hillclimb_locations;
use Illuminate\Http\Request;

class hillclimb_locationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hillclimb_locations = hillclimb_locations::all();
        return view('administrator.index', compact('hillclimb_locations'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hillclimb_locations  $hillclimb_locations
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hillclimb_locations = hillclimb_locations::findOrFail($id);

        return view('administrator.show', compact('hillclimb_locations'));
    }

}
