<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class GameController extends Controller
{
    public function loginLobbyController(){
       
        if(!Auth::guard('client')->user()){
             return redirect()->back()->with('error','Pleae Login First!');
         }
          $data = $this->firstCall();
          $game = $this->secondCall($data->response);
          return view('web.lobbyView',['htmlResponse' => $game]);
        dd($game);
    }
    public function game($id){
        dd($id);
    }
    
    public function firstCall(){
        $username = Auth::guard('client')->user()->username;
       $userID = "ae8_" . $username;
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://tomtest2.livewebsrv.com:4430/common-module/rest/RESTPrincipal',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "requestHeader": {
                "principalUserId": "lordexworldlb_test",
                "principalPwd": "zvL330ljP7kQc62AT",
                "service": "loginLobbyController"
                
            },
            "requestBody": {
                "userId": "' . $userID . '",
                "password": "1234567",
                "country": "IN",
                "language": "en",
                "currency": "INR"
            }
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        // dd($response);
        return json_decode($response);
        
    }
    public function secondCall($data){
        $url = $data->lobbyURL.'?token='.$data->token;
        // dd($url);
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: text/html',
            'Cookie: JSESSIONID=2A13121A93462DE46F3F39B77E2B1127'
          ),
        ));

        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;

    }
    public function secondCallold($data){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $data->lobbyURL,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
          "token": "'.$data->token.'"
        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: text/html',
            'Cookie: JSESSIONID=713665ED24F2661FA53FD0046E3A8A82'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
       
         return $response;
    }
    
     public function refreshToken(Request $request)
        {
            // Validate request parameters
            $request->validate([
                'token' => 'required|string' // Assuming token is a string
            ]);
        
            // Call the service to refresh the token
            $response = $this->callRefreshTokenService($request->token);
        
            // Return response
            return response()->json($response);
        }
    
    
    
    
    
    
    
    
}
