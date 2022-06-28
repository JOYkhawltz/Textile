<?php

namespace App\Http\Controllers;

use App\client;
use App\chartofaccounts;
use Illuminate\Http\Request;

class ChartofaccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate(25);

        return view('chartofaccounts.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coas = chartofaccounts ::all();
        return view('chartofaccounts.create', compact('coas'));
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
     * @param  \App\chartofaccounts  $chartofaccounts
     * @return \Illuminate\Http\Response
     */
    public function show(chartofaccounts $chartofaccounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\chartofaccounts  $chartofaccounts
     * @return \Illuminate\Http\Response
     */
    public function edit(chartofaccounts $chartofaccounts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\chartofaccounts  $chartofaccounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chartofaccounts $chartofaccounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\chartofaccounts  $chartofaccounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(chartofaccounts $chartofaccounts)
    {
        //
    }
}
