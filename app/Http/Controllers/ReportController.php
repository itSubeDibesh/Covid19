<?php

namespace App\Http\Controllers;

use App\Models\CovidData;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $data = CovidData::all();
        $province = CovidData::select('state')
            ->groupBy('state')
            ->orderBy('state')
            ->get();
        return view('backend.report.index',['data' => $data, 'province' => $province]);
    }
}
