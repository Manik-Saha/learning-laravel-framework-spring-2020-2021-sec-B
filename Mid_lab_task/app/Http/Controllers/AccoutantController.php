<?php

namespace App\Http\Controllers;

use App\Models\Accoutant;
use Illuminate\Http\Request;

class AccoutantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accoutant.index');
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
     * @param  \App\Models\Accoutant  $accoutant
     * @return \Illuminate\Http\Response
     */
    public function show(Accoutant $accoutant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accoutant  $accoutant
     * @return \Illuminate\Http\Response
     */
    public function edit(Accoutant $accoutant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accoutant  $accoutant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accoutant $accoutant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accoutant  $accoutant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accoutant $accoutant)
    {
        //
    }
}
