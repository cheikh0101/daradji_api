<?php

namespace App\Http\Controllers;

use App\Custom\CustomResponse;
use App\Models\Langues;
use Illuminate\Http\Request;

class LanguesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $langues = Langues::all();
        return CustomResponse::buildSuccessResponse($langues);
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
     * @param  \App\Models\Langues  $langues
     * @return \Illuminate\Http\Response
     */
    public function show(Langues $langues)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Langues  $langues
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Langues $langues)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Langues  $langues
     * @return \Illuminate\Http\Response
     */
    public function destroy(Langues $langues)
    {
        //
    }
}
