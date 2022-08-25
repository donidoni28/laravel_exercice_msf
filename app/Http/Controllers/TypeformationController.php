<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typeformation;
use Illuminate\Routing\Controller;

class TypeformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Typeformation::all();
        return view('types.home',[ 
            'types'=>$types
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Typeformation  $typeformation
     * @return \Illuminate\Http\Response
     */
    public function show(Typeformation $typeformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typeformation  $typeformation
     * @return \Illuminate\Http\Response
     */
    public function edit(Typeformation $typeformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Typeformation  $typeformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Typeformation $typeformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typeformation  $typeformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typeformation $typeformation)
    {
        //
    }
}
