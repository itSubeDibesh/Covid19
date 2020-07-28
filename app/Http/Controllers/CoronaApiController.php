<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Http\Client;

class CoronaApiController extends Controller
{
    public function getNepalData()
    {
//        $response = Http::withHeaders([
//            'x-rapidapi-host' => 'covid-19-coronavirus-statistics.p.rapidapi.com',
//            'x-rapidapi-key' => '6b4a189f66msh3da4b8efc30766bp107eccjsnb7f78218e112'
//        ])->get('https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats',
//            [
//                'country' => "Nepal"
//            ]);
//        $ListData = $response['data']['covid19Stats'];
//        return $ListData;
//
//        return response()->json( array('success' => true, 'ListData'=>$ListData));

        $corona_nepal = Http::withHeaders([
            'x-rapidapi-host' => 'coronavirus-monitor.p.rapidapi.com',
            'x-rapidapi-key' => '6b4a189f66msh3da4b8efc30766bp107eccjsnb7f78218e112'
        ])->get('https://coronavirus-monitor.p.rapidapi.com/coronavirus/latest_stat_by_country.php',
            [
                'country' => "nepal"
            ]);

        $corona_world = Http::withHeaders([
            'x-rapidapi-host' => 'coronavirus-monitor.p.rapidapi.com',
            'x-rapidapi-key' => '6b4a189f66msh3da4b8efc30766bp107eccjsnb7f78218e112'
        ])->get('https://coronavirus-monitor.p.rapidapi.com/coronavirus/worldstat.php');

        $ListData = $corona_nepal['latest_stat_by_country'];
        $WorldData = $corona_world->json();

        return response()->json(array('ListData' => $ListData, 'WorldData' => $WorldData));

    }
}
