<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\CricketPlaceBet;
use App\Models\FootballPlaceBet;
use App\Models\TennisPlaceBet;
use App\Models\HorseRacingPlaceBet;
use App\Models\GreyhoundRacingPlaceBet;
use App\Models\Admin;


class HomeController extends Controller
{
    public function cric_ket()
    {
        // Define the URL
        $url = "https://ujala11games.com/api/cricket/game-list";
        
        // Define the retry mechanism function
        function fetchData($url, $retries = 3, $timeout = 30)
        {
            while ($retries > 0) {
                $ch = curl_init();
                // Disable SSL verification
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                // Will return the response, if false it prints the response
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                // Set the url
                curl_setopt($ch, CURLOPT_URL, $url);
                // Set timeout
                curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
                // Execute
                $result = curl_exec($ch);
                // Check for errors
                if (curl_errno($ch)) {
                    $error_msg = curl_error($ch);
                    curl_close($ch);
                    $retries--;
                    if ($retries == 0) {
                        return ['error' => 'Error: ' . $error_msg];
                    }
                } else {
                    // Close cURL
                    curl_close($ch);
                    // Decode the result
                    return json_decode($result, true);
                }
            }
        }
    
        // Call the fetchData function with retry logic
        $response = fetchData($url);
    
        // Pass the response to the view
        return view('client.cricket', compact('response'))->with('response', $response);
    }
    


    public function cricket_details(Request $request, $game_id)
    {

        //get match list
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        $url = "https://ujala11games.com/api/cricket/match-list/" . $game_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);


        //get Games list
        $gm = curl_init();
        // Disable SSL verification
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        $url = "https://ujala11games.com/api/cricket/game/single/" . $game_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        // Execute
        $res = curl_exec($gm);
        // Will dump a beauty json <3
        $game_single = json_decode($res, true);

        curl_close($gm);
        if ($request->ajax()) {

            //get Games list
            $gm1 = curl_init();
            // Disable SSL verification
            curl_setopt($gm1, CURLOPT_SSL_VERIFYPEER, false);
            // Will return the response, if false it print the response
            curl_setopt($gm1, CURLOPT_RETURNTRANSFER, true);
            // Set the url
            $url1 = "https://ujala11games.com/api/game-score-list/" . $game_id;
            curl_setopt($gm1, CURLOPT_URL, $url1);
            // Execute
            $res1 = curl_exec($gm1);
            // Will dump a beauty json <3
            $game_singlescore = json_decode($res1, true);

            curl_close($gm1);

            return response()->json([
                'response' => $response,
                'game_single' => $game_single,
                'score' => $game_singlescore,
                'game_id' => $game_id,
            ]);
        }
        return view('client.Cricket-details', compact('response', 'game_single', 'game_id'));
    }

    public function cricket_bet_place(Request $request)
    {

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new CricketPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $user->balance = $user->balance - $request->bet_stake;
        $user->save();

        $played_matches = CricketPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();


        // if($statusCode=='200'){
        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
        // }

    }

    public function foot_ball()
    {
        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/football/game-list");
        // Execute
        $allGameresult = curl_exec($chr);
        // Will dump a beauty json <3
        $allGames = json_decode($allGameresult, true);

        curl_close($chr);

        $response = $allGames;

        //           $ch = curl_init();
        //         // Disable SSL verification
        //         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //         // Will return the response, if false it print the response
        //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //         // Set the url
        //         curl_setopt($ch, CURLOPT_URL,"https://ujala11games.com/api/football/game-list");
        //         // Execute
        //         $result=curl_exec($ch);
        //         // Will dump a beauty json <3
        //         $response=json_decode($result, true);

        //         curl_close($ch);
        // dd($response);
        return view('client.football', compact('response'));
    }


    public function football_details(Request $request, $game_id)
    {
        //get match list
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/football/match-list/" . $game_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        //get Games list
        $gm = curl_init();
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/football/game/single/" . $game_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        $res = curl_exec($gm);
        $game_single = json_decode($res, true);
        curl_close($gm);
        if ($request->ajax()) {
            
              //get Games list
              $gm1 = curl_init();
              // Disable SSL verification
              curl_setopt($gm1, CURLOPT_SSL_VERIFYPEER, false);
              // Will return the response, if false it print the response
              curl_setopt($gm1, CURLOPT_RETURNTRANSFER, true);
              // Set the url
              $url1 = "https://ujala11games.com/api/game-score-list/" . $game_id;
              curl_setopt($gm1, CURLOPT_URL, $url1);
              // Execute
              $res1 = curl_exec($gm1);
              // Will dump a beauty json <3
              $game_singlescore = json_decode($res1, true);
  
              curl_close($gm1);

            return response()->json([
                'response' => $response,
                'game_single' => $game_single,
                'score' => $game_singlescore,
                'game_id' => $game_id,
            ]);
        }

        return view('client.Football-Details', compact('response', 'game_single', 'game_id'));
    }

    public function football_bet_place(Request $request)
    {

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new FootballPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $user->balance = $user->balance - $request->bet_stake;
        $user->save();

        $played_matches = FootballPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();

        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
    }

    public function ten_nis()
    {

        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL, "https://ujala11games.com/api/get-all-games-list");
        // Execute
        $allGameresult = curl_exec($chr);
        // Will dump a beauty json <3
        $allGames = json_decode($allGameresult, true);

        curl_close($chr);

        $response = $allGames['tennises'];


        //   $ch = curl_init();
        // // Disable SSL verification
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // // Will return the response, if false it print the response
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // // Set the url
        // curl_setopt($ch, CURLOPT_URL,"https://ujala11games.com/api/tennis/game-list");
        // // Execute
        // $result=curl_exec($ch);
        // // Will dump a beauty json <3
        // $response=json_decode($result, true);

        // curl_close($ch);

        return view('client.Tennis', compact('response'));
        // return view('client.Tennis');
    }

    public function tennis_details(Request $request, $game_id)
    {
        //get match list
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/tennis/match-list/" . $game_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        //get Games list
        $gm = curl_init();
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/tennis/game/single/" . $game_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        $res = curl_exec($gm);
        $game_single = json_decode($res, true);
        curl_close($gm);
        if ($request->ajax()) {
              //get Games list
              $gm1 = curl_init();
              // Disable SSL verification
              curl_setopt($gm1, CURLOPT_SSL_VERIFYPEER, false);
              // Will return the response, if false it print the response
              curl_setopt($gm1, CURLOPT_RETURNTRANSFER, true);
              // Set the url
              $url1 = "https://ujala11games.com/api/game-score-list/" . $game_id;
              curl_setopt($gm1, CURLOPT_URL, $url1);
              // Execute
              $res1 = curl_exec($gm1);
              // Will dump a beauty json <3
              $game_singlescore = json_decode($res1, true);
  
              curl_close($gm1);
            return response()->json([
                
                'response' => $response,
                'game_single' => $game_single,
                'score' => $game_singlescore,
                'game_id' => $game_id,
            ]);
        }
        return view('client.Tennis-details', compact('response', 'game_single', 'game_id'));
        // return view('client.Tennis-details');
    }

    public function tennis_bet_place(Request $request)
    {

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new TennisPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $user->balance = $user->balance - $request->bet_stake;
        $user->save();

        $played_matches = TennisPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();

        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
    }


    public function horse_racing()
    {
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/horseracing/game-list");
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);

        return view('client.horse_racing', compact('response'));
        // return view('client.horse_racing');
    }

    public function horse_racing_detail($time_slot_id)
    {
        //get match list
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/horseracing/match-list/" . $time_slot_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        //get Games list
        $gm = curl_init();
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/horseracing/game/single/" . $time_slot_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        $res = curl_exec($gm);
        $game_single = json_decode($res, true);
        curl_close($gm);

        return view('client.horse_racing_detail', compact('response', 'game_single'));
        // return view('client.horse_racing_detail');
    }

    public function horseracing_bet_place(Request $request)
    {

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new HorseRacingPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $user->balance = $user->balance - $request->bet_stake;
        $user->save();

        $played_matches = HorseRacingPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();

        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
    }


    public function grey_hound()
    {
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, "https://ujala11games.com/api/greyhoundracing/game-list");
        // Execute
        $result = curl_exec($ch);
        // Will dump a beauty json <3
        $response = json_decode($result, true);

        curl_close($ch);

        return view('client.grey_hound', compact('response'));
        // return view('client.grey_hound');
    }

    public function grey_hound_detail($time_slot_id)
    {
        //get match list
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/greyhoundracing/match-list/" . $time_slot_id;
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        $response = json_decode($result, true);
        curl_close($ch);

        //get Games list
        $gm = curl_init();
        curl_setopt($gm, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($gm, CURLOPT_RETURNTRANSFER, true);
        $url = "https://ujala11games.com/api/greyhoundracing/game/single/" . $time_slot_id;
        curl_setopt($gm, CURLOPT_URL, $url);
        $res = curl_exec($gm);
        $game_single = json_decode($res, true);
        curl_close($gm);

        return view('client.grey_hound_detail', compact('response', 'game_single'));
        // return view('client.grey_hound_detail');
    }

    public function greyhoundracing_bet_place(Request $request)
    {

        if ($request->bet_stake == null || Auth::guard('client')->user()->balance < $request->bet_stake) {
            return redirect()->back()->with(['error' => 'Could not place bet due to insufficient balance', 'myBets' => null]);
        }

        $user_id =  Auth::guard('client')->user()->id;

        $placeBet = new GreyhoundRacingPlaceBet();
        $placeBet->match_id = $request->match_id;
        $placeBet->bet_odds = $request->bet_odds;
        $placeBet->bet_stake = $request->bet_stake;
        $placeBet->back_lay = $request->back_lay;
        $placeBet->bet_profit = $request->bet_profit;
        $placeBet->user_id = $user_id;
        $placeBet->team_name = $request->bet_team_name;
        $placeBet->save();

        $user = Admin::findOrFail($user_id);
        $user->balance = $user->balance - $request->bet_stake;
        $user->save();

        $played_matches = GreyhoundRacingPlaceBet::where('user_id', $user_id)->where('bet_result', null)->orderBy('id', 'desc')->get();

        return redirect()->back()->with(['message' => 'Bet placed successfully', 'myBets' => $played_matches]);
    }












    public function index()
    {
        return view('client.home');
    }
    public function home()
    {
        return view('client.home');
    }
    public function changepassword()
    {
        return view('web.changepassword');
    }
    public function transferstatement()
    {
        return view('client.transferstatement');
    }
    public function mybets()
    {
        return view('client.mybets');
    }
    public function loss_profit()
    {
        return view('client.profitloss');
    }
    public function secureauth()
    {
        return view('client.secureauth');
    }
    public function message()
    {
        return view('client.message');
    }
    public function statement()
    {
        return view('client.accountstatement');
    }


    public function tenis()
    {
        return view('client.table-tennis');
    }
    public function dart()
    {
        return view('client.darts');
    }
    public function badmint_on()
    {
        return view('client.badminton');
    }
    public function kaba_ddi()
    {
        return view('client.Kabaddi');
    }
    public function queen_result()
    {
        return view('client.queen-results');
    }
    public function boxi_ng()
    {
        return view('client.boxing');
    }
    public function artss()
    {
        return view('client.arts');
    }
    public function motor_sport()
    {
        return view('client.Motor-Sport');
    }
    public function basketball()
    {
        return view('client.basketball');
    }
    public function election()
    {
        return view('client.election2023');
    }
    public function icc()
    {
        return view('client.Icc2023');
    }
    public function lottery()
    {
        return view('client.lottery');
    }
    public function casino()
    {
        return view('client.live-casino');
    }
    public function details4()
    {
        return view('client.Cricket-details-pages-4');
    }
    public function details3()
    {
        return view('client.Cricket-details-pages-3');
    }
    public function details2()
    {
        return view('client.Cricket-details-pages-2');
    }
    public function basket_details()
    {
        return view('client.basketball-details');
    }
    public function kabaddi_details()
    {
        return view('client.Kabaddi-details');
    }
    public function race20()
    {
        return view('client.race20');
    }
    public function queen_20()
    {
        return view('client.queen');
    }
    public function andarbahar2()
    {
        return view('client.andarbahar2');
    }
    public function dragon_tiger()
    {
        return view('client.20-20-dragon-tiger');
    }
    public function casino_result()
    {
        return view('client.casino-results');
    }
    public function andarbahar_result()
    {
        return view('client.andarbahar-results');
    }
    public function tiger_result()
    {
        return view('client.tiger-results');
    }
}
