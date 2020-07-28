<?php

namespace App\Http\Controllers;

use App\Models\CovidData;
use Illuminate\Http\Request;

class CovidDataController extends Controller
{
    protected $covidData = null;

    public function __construct(CovidData $covidData)
    {
        $this->covidData = $covidData;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->covidData->validateCovidData());
        $covidData = new CovidData(request()->all());
        $success = $covidData->save();

        $returnHTML = view('frontend.result',['data'=> $request->all()])->render();
        return response()->json( array('success' => true, 'html'=>$returnHTML) );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CovidData  $covidData
     * @return \Illuminate\Http\Response
     */
    public function show(CovidData $covidData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CovidData  $covidData
     * @return \Illuminate\Http\Response
     */
    public function edit(CovidData $covidData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CovidData  $covidData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CovidData $covidData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CovidData  $covidData
     * @return \Illuminate\Http\Response
     */
    public function destroy(CovidData $covidData)
    {
        //
    }
}
