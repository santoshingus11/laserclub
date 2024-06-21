<?php

namespace App\Http\Controllers\Web;

use App\Models\CasinoGames;
use Illuminate\Http\Request;
use App\Models\LiveCasinoGame;
use App\Http\Controllers\Controller;

class WebController extends Controller
{

    public function index()
    {


        //   $data = [
        //         'casino' => CasinoGames::all(),
        //         'livecasino' =>  LiveCasinoGame::all()
        //   ];
        //     return view('web.index')->with('data',$data);

        //Casino games api
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://tbs2api.aslot.net/API/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => '{
        "cmd": "gamesList",
        "hall": "3203680",
        "key": "ArT657OIY809TyyuFD",
        "cdnUrl": ""
        }',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content-Type: application/json',
                'Cookie: PHPSESSID=ab4edemrk4d7edk2mc057vgfeq'
            ),
        ));

        $responseCas = curl_exec($curl);

        curl_close($curl);
        $gameData = json_decode($responseCas);

        // $liveEvolutionLobbyGames = [];
        // for($i=0; $i<=50; $i++){
        //     if ($gameData->content->gameList[$i]->label === 'evolution_lobby') {
        //         $liveEvolutionLobbyGames[] = $gameData->content->gameList[$i];
        //     }
        // }

        $casino = $gameData->content->gameList;
        $liveEvolutionLobbyGames = [];
        foreach ($casino as $game) {
            if ($game->label === 'evolution_lobby') {
                if (($game->id >= 9325 && $game->id <= 9630) || ($game->id >= 9281 && $game->id <= 9286) || ($game->id >= 9633 && $game->id <= 9644) || ($game->id >= 9658 && $game->id <= 9660)) {
                    continue;
                }

                $liveEvolutionLobbyGames[] = $game;
            }
        }

        // $casino = $gameData->content->gameList;
        // $sportBetGames = [];
        // foreach ($casino as $game) {
        //     if ($game->label === 'sport_betting') {
        //         $sportBetGames[] = $game;
        //     }
        // }

        $data = [
            'labels' => $gameData->content->gameLabels,
            'games' => $gameData->content->gameList,
            'liveGames' => $liveEvolutionLobbyGames,
            // 'sportBetGames' => $sportBetGames
        ];

 
        return view('web.index')->with('data', $data);
        // return view('web.index');
    }


    function mobile_login()
    {
        return view('mobile_login');
    }
}
