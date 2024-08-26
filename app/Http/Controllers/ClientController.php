<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use App\Models\DepositRequest;
use App\Models\PaymentMethod;
use App\Models\WithdrawRequest;
use App\Models\LiveCasinoGame;
use App\Models\LiveCasinoCategory;
use App\Models\CasinoGames;
use App\Models\CasinoCategory;
use App\Models\BetRecord;
use App\Models\TennisPlaceBet;
use App\Models\HorseRacingPlaceBet;
use App\Models\GreyhoundRacingPlaceBet;
use App\Models\CricketPlaceBet;
use App\Models\Deposit;
use App\Models\FootballPlaceBet;
use App\Models\Withdraw;

class ClientController extends Controller
{
    use AuthenticatesUsers;
    public function client_login()
    {

        return view('web.login');
    }
    public function logout()
    {
        if (Auth::guard('client')->check()) {
            // Update login_status
            Admin::where('id', Auth::guard('client')->user()->id)->update(['login_status' => 2]);
            $user = Admin::where(['id' => Auth::guard('client')->user()->id])->update(['logout_at' => now()]);
            // Logout the user
            Auth::guard('client')->logout();
        }

        return redirect()->route('/');
    }
    public function client()
    {
        return view('client.home');
    }
    public function login_submit(Request $request)
    {

        try {
            // $isDatabaseConnected = $this->checkDatabaseConnection();

            // if (!$isDatabaseConnected) {
            //     return response()->json(['success' => false, 'message' => 'Unable to establish a connection to the database']);
            // }
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required',
            ]);

            // Check if validation fails
            if ($validator->fails()) {
                throw new ValidationException($validator);
            }
          
            $input = $request->all();
        
            if (Auth::guard('client')->attempt(['username' => $input['username'], 'password' => $input['password']]) && Auth::guard('client')->user()->status == 1) {
                // Check if the role_id is not in [1, 2, 3, 4]
                $notallowedRoles = [1, 2, 3, 4];
                $userRoleId = Auth::guard('client')->user()->role_id;

                if (in_array($userRoleId, $notallowedRoles)) {

                    return back()->with('error', 'Please fill valid details');
                }
                $lastlogin = Admin::where(['id' => Auth::guard('client')->user()->id])->update(['last_login' => now()]);
                $user = Admin::where(['id' => Auth::guard('client')->user()->id])->update(['login_status' => 1]);
                // Assuming you want to return a JSON response
                return redirect('/');
                // return redirect()->route('logout_account_page');
                // return response()->json(['success' => true, 'redirect' => route('client.slot_games')]);
            } else {
                return back()->with('error', 'Incorrect username or password');
            }
        } catch (ValidationException $e) {
            // Handle validation errors
            $errors = $e->validator->errors()->toArray();
            return back()->with('error', reset($errors)[0]);
            // return response()->json(['success' => false, 'message' => reset($errors)[0]]);
        } catch (\Throwable $th) {
            // Log or handle other exceptions
            return back()->with('error', 'An error occurred during login');
        }
    }
    
    public function mobile_submit_login(Request $request)
    {

        try {
            // $isDatabaseConnected = $this->checkDatabaseConnection();

            // if (!$isDatabaseConnected) {
            //     return response()->json(['success' => false, 'message' => 'Unable to establish a connection to the database']);
            // }
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required',
            ]);

            // Check if validation fails
            if ($validator->fails()) {
                throw new ValidationException($validator);
            }

            $input = $request->all();
            if (Auth::guard('client')->attempt(['username' => $input['username'], 'password' => $input['password']]) && Auth::guard('client')->user()->status == 1) {
                // Check if the role_id is not in [1, 2, 3, 4]
                $notallowedRoles = [1, 2, 3, 4];
                $userRoleId = Auth::guard('client')->user()->role_id;

                if (in_array($userRoleId, $notallowedRoles)) {

                    return back()->with('error', 'Please fill valid details');
                }
                $lastlogin = Admin::where(['id' => Auth::guard('client')->user()->id])->update(['last_login' => now()]);
                $user = Admin::where(['id' => Auth::guard('client')->user()->id])->update(['login_status' => 1]);
                // Assuming you want to return a JSON response
                return redirect('/');
                // return redirect()->route('logout_account_page');
                // return response()->json(['success' => true, 'redirect' => route('client.slot_games')]);
            } else {
                return back()->with('error', 'Incorrect username or password');
            }
        } catch (ValidationException $e) {
            // Handle validation errors
            $errors = $e->validator->errors()->toArray();
            return back()->with('error', reset($errors)[0]);
            // return response()->json(['success' => false, 'message' => reset($errors)[0]]);
        } catch (\Throwable $th) {
            // Log or handle other exceptions
            return back()->with('error', 'An error occurred during login');
        }
    }

    public function client_register()
    {
        return view('web.register');
    }

    public function register_submit(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:admins',
            'password' => 'required|confirmed|min:6',
            'phone' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->toArray();
            return back()->with('error', reset($errors));
        }

        $client = new Admin();
        $client->username = $request->username;
        $client->password = Hash::make($request->password);
        $client->phone = $request->phone;
        $client->role_id = 5;
        $client->status = 1;
        $client->save();

        if (Auth::guard('client')->attempt(['username' => $request->username, 'password' => $request->password]) && Auth::guard('client')->user()->status == 1) {
            // Check if the role_id is not in [1, 2, 3, 4]
            $notallowedRoles = [1, 2, 3, 4];
            $userRoleId = Auth::guard('client')->user()->role_id;

            if (in_array($userRoleId, $notallowedRoles)) {

                return back()->with('error', 'Please fill valid details');
            }
            $lastlogin = Admin::where(['id' => Auth::guard('client')->user()->id])->update(['last_login' => now()]);
            $user = Admin::where(['id' => Auth::guard('client')->user()->id])->update(['login_status' => 1]);
            // Assuming you want to return a JSON response
            return redirect('/');
            // return response()->json(['success' => true, 'redirect' => route('client.slot_games')]);
        } else {
            return back()->with('error', 'Incorrect username or password');
        }
    }
    // private function checkDatabaseConnection()
    // {
    //     try {
    //         // Use the default connection to check if the database is connected
    //         DB::select('select 1');
    //         return true;
    //     } catch (\Exception $e) {
    //         // An exception will be thrown if the database connection fails
    //         return false;
    //     }
    // }
    public function depositFunds()
    {
        return view('web.moneytransfer.deposit')->with('account', PaymentMethod::find(1));
        // return view('client.depositview')->with('account',PaymentMethod::find(1));
    }
    public function depositbankView()
    {
        return view('web.moneytransfer.bank')->with('account', PaymentMethod::find(2));
    }
    public function depositphonepeView()
    {
        return view('web.moneytransfer.phonpe')->with('account', PaymentMethod::find(3));
    }
    public function depositgpayView()
    {
        return view('web.moneytransfer.gpay')->with('account', PaymentMethod::find(4));
    }
    public function depositupiView()
    {
        return view('web.moneytransfer.upi')->with('account', PaymentMethod::find(5));
    }
    public function depositRequeststore(Request $request)
    {
        // dd(Auth::guard('client')->user()->id);
        // Validate form data
        $request->validate([
            'id' => 'nullable|numeric',
            'price' => 'required|numeric',
            'bonus' => 'nullable|string',
            'image' => 'required|image|max:2048', // Assuming it's an image file
        ]);
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('deposit'), $imageName);
        // Handle file upload
        // $imagePath = $request->file('image')->store('uploads', 'public');

        // Create a new DepositRequest instance
        $depositRequest = new DepositRequest;
        $depositRequest->user_id = Auth::guard('client')->user()->id; // Assuming you're storing the current user's ID
        $depositRequest->payment_id = $request->id;
        $depositRequest->price = $request->price;
        $depositRequest->bonus = $request->bonus;
        $depositRequest->img = $imageName;
        $depositRequest->save();

        // Optionally, you can redirect the user back with a success message
        return redirect()->back()->with('success', 'Deposit request submitted successfully!');
    }
    public function withdrawView()
    {
        return view('web.moneytransfer.withdraw');
    }
    public function withdrawrequestsubmit(Request $request)
    {
        $request->validate([
            'bank_name' => 'required|string',
            'account_number' => 'required|string',
            'account_holder' => 'required|string',
            'balance' => 'required|numeric',
        ]);
        $client = Admin::where('id', Auth::guard('client')->user()->id)->first();
        if (!$client) {
            throw new \Exception('Client not found.');
        }
        if ($client->balance < $request->balance) {
            return redirect()->back()->with('success', 'Your Account Balance is low!');
        }
        // Create a new WithdrawRequest instance and populate it with the request data
        $withdrawRequest = new WithdrawRequest();
        $withdrawRequest->client_id = Auth::guard('client')->user()->id;
        $withdrawRequest->bank_name = $request->bank_name;
        $withdrawRequest->account_number = $request->account_number;
        $withdrawRequest->account_holder = $request->account_holder;
        $withdrawRequest->balance = $request->balance;

        // Save the withdraw request to the database
        $withdrawRequest->save();

        // Optionally, you can return a response or redirect somewhere
        return redirect()->back()->with('success', 'Withdraw request submitted successfully.');
    }


    public function launch($gameid){
         if(!Auth::guard('client')->user()){
             return redirect()->back()->with('error','Pleae Login First!');
         }
        //  dd(Auth::guard('client')->user()->username);
        $curl = curl_init();
        $payload = json_encode(array(
            "cmd" => "openGame",
            "hall" => "3203680",
            "domain" => "https://laserclub.art",
            "exitUrl" => "https://laserclub.art/exitGame",
            "language" => "en",
            "key" => "ArT657OIY809TyyuFD",
            "login" => Auth::guard('client')->user()->username,
            "gameId" => $gameid, // Correctly interpolated variable
            "cdnUrl" => "https://laserclub.art/",
            "demo" => "0"
        ));
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://tbs2api.aslot.net/API/openGame/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $payload
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $gameData= json_decode($response);
        return view('client.slot.launch')->with('gameUrl',$gameData->content->game->url);
        // dd($gameData->content->game);
    }
    
    public function slotgames(){
        return redirect()->route('/');
    }


    public function bet_history_client()
    {
       $user_id = Auth::guard('client')->user()->id;
        $betRecords = BetRecord::where('admin_id',$user_id)->orderBy('id','desc')->paginate(10);
        $cricketBets = CricketPlaceBet::where('user_id',$user_id)->orderBy('id','desc')->paginate(10);
        $footballBets = FootballPlaceBet::where('user_id',$user_id)->orderBy('id','desc')->get();
        $tennisBets = TennisPlaceBet::where('user_id',$user_id)->orderBy('id','desc')->get();
        $horseBets = HorseRacingPlaceBet::where('user_id',$user_id)->orderBy('id','desc')->get();
        $greyhoundBets = GreyhoundRacingPlaceBet::where('user_id',$user_id)->orderBy('id','desc')->get();

        return view('client.bet_history_client', compact('betRecords','cricketBets','footballBets','tennisBets','horseBets','greyhoundBets'));
        // return view('client.bet_history_client');
    }
    //   public function bet_history_client()
    // {
     
    //     return view('client.account_statement');
    //     // return view('client.bet_history_client');
    // }
    public function account_statement()
    {
        // $bankingHistories = BankingHistory::where('user_id', Auth::guard('client')->user()->id)->orderBy('banking_history_id', 'desc')->get();
        $deposits = Deposit::all();
        $withdraw = Withdraw::all();

        return view('account_statement', get_defined_vars());
    }
    //    function account_statement()
    // {
    //     return view('account_statement');
    // }
    function profile()
    {
        return view('profile');
    }
    function unsettled()
    {
        return view('unsettled');
    }
    function profit_loss()
    {
        return view('profit_loss');
    }
    function change_pass()
    {
        return view('change_pass');
    }
      function logout_account_page()
    {
        return view('logout_account_page');
    }
}
