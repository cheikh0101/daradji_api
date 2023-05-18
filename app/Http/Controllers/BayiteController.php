<?php

namespace App\Http\Controllers;

use App\Custom\CustomResponse;
use App\Models\Bayite;
use Illuminate\Http\Request;

class BayiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bayites = Bayite::all();
        return CustomResponse::buildSuccessResponse($bayites);
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
     * @param  \App\Models\Bayite  $bayite
     * @return \Illuminate\Http\Response
     */
    public function show(Bayite $bayite)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bayite  $bayite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bayite $bayite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bayite  $bayite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bayite $bayite)
    {
        //
    }
}
