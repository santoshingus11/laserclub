<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\SportList;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SportsController extends Controller
{
    public function fancylobby(){
        $sports = SportList::where('status',1)->get();
        // dd($sports);
         return view('web.fancy')->with('data',$sports);
        
        $gamedata = $this->getSports();
        $filteredData = array_filter($gamedata, function($entry) {
            return isset($entry->league_year) && $entry->league_year == 2024;
        });
        dd($filteredData);
        return view('web.fancy')->with('data',$filteredData);
    }
    
    public function getSports(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://apiv2.allsportsapi.com/cricket/?met=Leagues&APIkey=125bac1be6b261adc17fcbd1651cc07a9b34be07dafe24b552b9b9aaff9a0880',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        $data = json_decode($response);
        return $data->result;
    }
}