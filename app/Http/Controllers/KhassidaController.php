<?php

namespace App\Http\Controllers;

use App\Custom\CustomResponse;
use App\Models\Bayite;
use App\Models\Khassida;
use App\Models\Xassida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KhassidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khassidas = Khassida::all();
        return CustomResponse::buildSuccessResponse($khassidas);
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
     * @param  \App\Models\Xassida  $xassida
     * @return \Illuminate\Http\Response
     */
    public function show(Khassida $khassida)
    {
        $bayiteOfKhassida = Bayite::where("khassida_id", $khassida->id)->with('khassida')->get();
        return CustomResponse::buildSuccessResponse($bayiteOfKhassida);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Xassida  $xassida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Khassida $xassida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Xassida  $xassida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Khassida $xassida)
    {
        //
    }
}
