<?php

namespace App\Http\Controllers\admin;

use App\Helpers\QueryHelper;
use App\Models\User;
use App\Models\Admin;
use App\Models\CreditLog;
use App\Models\BetHistory;
use App\Models\Passwordlogs;
use App\Models\PositionTaking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Rules\CustomRule;
use Jenssegers\Agent\Agent;
use App\Models\DepositRequest;
use App\Models\PaymentMethod;
use App\Models\WithdrawRequest;
use App\Models\Balance;
use App\Models\BalanceLog;

class AdminController extends Controller
{

    use AuthenticatesUsers;
    public function update_status(Request $request){
        // dd($request->type);
        if($request->type=='bet'){
       $data=[
        'id' => $request->id,
        'bet_status' => $request->status,
       ];
    }else{
        $data=[
            'id' => $request->id,
            'transfer_status' => $request->status,
           ];
    }
       Admin::where('id',$request->id)->update($data);
       if($request->type=='bet'){
       return response()->json(['message' => 'Bet Status updated successfully']);
    }else{
        return response()->json(['message' => 'Transfer Status updated successfully']);
    }
}
    public function admin_login(){
    //   return Hash::make('123456');
       
        return view('agent.login');
    }
    public function logout_all(Request $request){
        return redirect()->back();
    }
    // public function logout_all(Request $request){
    //     try{       
    //         $sessions = glob(storage_path("framework/sessions/*"));
    //         foreach($sessions as $file){
    //           if(is_file($file))
    //             unlink($file);
    //         }
    //         $agent = new Agent();
    //         $browserName = $agent->browser();
    //         $browserVersion = $agent->version($browserName);
    //         $platform = $agent->platform();
    //         $agentInfo = "$browserName $browserVersion ($platform)";
    //         Admin::where('login_status',1)->update(['logout_at' => date('Y-m-d H:i:s'),'login_status'=>2]);
    //         $username = $request->username;
    //         $ipAddress = request()->ip();
    //         $agent_info = $agentInfo;
    //         $new_password = $request->password;
    //         $fieldType = filter_var($username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    //         if (Auth::guard('agent')->attempt(array($fieldType => $username, 'password' => $new_password))) {    
    //           Admin::where('id',Auth::guard('agent')->user()->id)->update(['ip_address'=>$ipAddress,'last_login'=>date('Y-m-d H:i:s'),'login_status'=>1,'agent_info'=>$agent_info]);          
    //           return redirect()->route('online-user')->with('success','Successfully Updated');
    //        }
    //        return redirect()->back()->with('success','Successfully Logout');
    //     }catch(\Throwable $th){
    //      //  return $th->getMessage();
    //        return redirect()->back()->with('success','Something Went Wrong');
    //     }
       
    // }
    // public function logout_all(Request $request){
    //     // return 5;
    //     if(Auth::guard('agent')->user()->user_access=='1'){
    //         $userid=Auth::guard('agent')->user()->admin_id;
    //     }else{
    //         $userid=Auth::guard('agent')->user()->id;
    //     }
    

    //     // Update login_status and logout_at for all users except the current one
    //     $logout=Admin::where('login_status', '1')
    //         ->where('id', '!=', $userid)
        
    //         ->update([
    //         'login_status' => 2,
    //         'logout_at' => now(),
    //     ]);
     

    //     return response()->json(['message' => 'All users have been logged out.']);
    // }
    public function agent(Request $request){
    
        return view('agent.dashboard');
    }
    public function agent_dashboard(){
        return view('agent.dashboard');
    }
    public function admin_detail(Request $request){
       $id=$request->id;     
        $admindata=Admin::where('id',$id)->first(); 
        return view('agent.formadminmodal',compact('admindata'));
    }
   
   
    public function password_update(Request $request)
{   
    // return $request->old_password;
    $validator = Validator::make($request->all(), [
        'old_password' => 'required|string',
        'new_password' =>  [
            'required',
            'string',
            'min:8',
            new CustomRule,           
        ],
      
        'confirm_password' => 'required|string|same:new_password',
    ]);
    $validator->sometimes('confirm_password', 'different:new_password', function ($input) {
       
        return $input->new_password !== $input->confirm_password;
    });

    // Check if validation fails
    if ($validator->fails()) {
        $errors = $validator->errors();

        return response()->json(['errors' => $errors], 422);
    }
    $user = Auth::guard('agent')->user();
    if(Auth::guard('agent')->user()->user_access == '1') {
        $userid=Auth::guard('agent')->user()->admin_id;
    }else{
        $userid=Auth::guard('agent')->user()->id;
    }
    if (!$user || !Hash::check($request->old_password, $user->password)) {
        return response()->json(['error' => 'Request failed. Old Password is incorrect.'], 401);
    }else{
        $passwordupdate=[
            'password' => bcrypt($request->new_password),
        ];
       
        
            $passwordlog = [
                'user_id' => $user->id,
                'change_by_user' => $user->id,
                'remarks' => 'Password updated by Self',
                'created_at' => now(),
            ];
            // dd($passwordlog);
            $insertpassword=Passwordlogs::insert($passwordlog);
          
        
        Admin::where('id',$user->id)->update($passwordupdate);
      
    }
    $user = Auth::guard('agent')->user();
    // $passwordlogs=[
    //     'user_id' => $userid,
    //     'change_by_user'=>$userid,
    //     'remarks' =>1,
    //     'created_at' =>now()
    // ];
    // $insertlog=Passwordlogs::insertorcreate($passwordlogs);
    return response()->json(['message' => 'Password updated successfully']);
}
public function agent_listing(Request $request){

    $admin_ids=QueryHelper::adminids();

    if ($request->has('id')) {
        $admin = Admin::find($request->id);        
        if ($admin) {  
            $data = Admin::where('admin_id', $admin->id)
            ->get();
                
        }             
       
    } else {
            $data = Admin::whereIn('id', $admin_ids)->get() ?? [];
        }

    return view('agent.agent-listing',compact('data'));
  }
  public function admin_add_submit(Request $request){
    // return $request->login_id;
    $validator= Validator::make($request->all(),[
        'username' =>'required|string',
        'password'=>[ 'required',
        'string',
        'min:8',
        new CustomRule,

    ],
    'confirm_password'=>'required|string|same:password',
    'status' => 'required|in:0,1',
    'credit_limit' => 'required|numeric',
    'message' => 'nullable|string',
    'cricket' => 'nullable|numeric',
    'football' => 'nullable|numeric',
    'tennis' => 'nullable|numeric',
    'horse_racing' => 'nullable|numeric',
    'greyhound_racing' => 'nullable|numeric',
    'casino' => 'nullable|numeric',
    'other' => 'nullable|numeric',
    ], [
        'numeric' => 'The :attribute must be a number.',
        'regex' => 'The :attribute must contain only numeric values.',
    ]);
    
    
    $validator->sometimes('confirm_password', 'different:new_password', function ($input) {
       
        return $input->new_password !== $input->confirm_password;
    });
  
    if ($validator->fails()) {
        $errors = $validator->errors();
        return response()->json(['errors' => $errors], 422);
    }
    $existingloginId=Admin::where('login_id', $request->login_id)->first();
    $existingUser = Admin::where('username', $request->username)->first();
    if ($existingloginId) {
        return response()->json(['error' => 'Login Id Already Exist!', 'field' => 'loginId'], 402);
    }
    if ($existingUser) {
        return response()->json(['error' => 'Username Already Exist', 'field' => 'username'], 401);
    }

    $user = Auth::guard('agent')->user();
    $adminId = null; 

    if(Auth::guard('agent')->user()->user_access==1){

        $agent_admin_id=Auth::guard('agent')->user()->admin_id;
        $userid= Auth::guard('agent')->user()->admin_id;
    }else{
        $agent_admin_id=Auth::guard('agent')->user()->id;
        $userid= Auth::guard('agent')->user()->id;
    }

    $data = [
        'username'    => $request->username,
        'password'    => bcrypt($request->password),
        'status'      => $request->status,
        'credit_limit'=> $request->credit_limit,
        'message'     => $request->message,
        'login_id'    => $request->login_id,
        'role_id'     => $user->role_id + 1,
        'admin_id'    => $agent_admin_id,
        'admin_role'  => $user->role_id,
        'created_at'  => now(),
    ];

    $admin = Admin::create($data);
    $id = $admin->id;

    // if ($admin) {
    //     $admin = Admin::where('username', $request->username)->first();
    //     $adminId = $admin->id;
    // }

    // if (!$adminId) {
    //     return response()->json(['error' => 'Failed to insert data'], 500);
    // }

    $credit=[
        'credit_new_value' => $request->credit_limit,
        'credit_from' =>$userid,
        'credit_to' => $id,
        'stake' =>$request->credit_limit,
        
    ];
    $credit_log=CreditLog::insert($credit);
    
    $position = [
        'cricket'           => $request->cricket,
        'football'          => $request->football,
        'admin_id'          => $id,
        'tennis'            => $request->tennis,
        'horse_racing'      => $request->horse_racing,
        'greyhound_racing'  => $request->greyhound_racing,
        'casino'            => $request->casino,
        'other'             => $request->other,
        'created_at'        => now(),
    ];

    $positionadd = PositionTaking::insert($position);

    if ($positionadd) {
        return response()->json(['success' => 'Added Successfully.']);
       
        return response()->json(['success' => true, 'redirect' => route('super-master-listing')]);
    }else{
        return response()->json(['error' => 'Failed to insert data'], 500);
    }

   
}
    public function admin_submit(Request $request){
        // $agent = new Agent();
        // $browserName = $agent->browser();
        // $browserVersion = $agent->version($browserName);
        // $platform = $agent->platform();
        // $agentInfo = "$browserName $browserVersion ($platform)";
        // $ipAddress = $request->ip();

        // Check for forwarded headers to get the actual client IP
   
        try {
           
            // Validate the incoming request data
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required',
            ]);
    
            // Check if validation fails
            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();
                $errorMessages = [];
    
                foreach ($errors as $field => $messages) {
                    foreach ($messages as $message) {
                        $errorMessages[] = $message;
                    }
                }
    
                throw new ValidationException($validator, response()->json(['success' => false, 'message' => implode(' ', $errorMessages)], 422)); // Use 422 Unprocessable Entity status code for validation errors
            }
    
            $input = $request->all();
    
          if (Auth::guard('agent')->attempt(['username' => $input['username'], 'password' => $input['password']]) ) {
            $allowedRoles = [1,2,3,4];
            $userRoleId = Auth::guard('agent')->user()->role_id;
            $userId = Auth::guard('agent')->user()->id;
            
            $userdata = Auth::guard('agent')->user(); // Use Auth::guard('web')->user() directly
            // return $userdata;
            if (in_array($userRoleId, $allowedRoles)) {
                // $this->updateLoginStatus($userId);
                $lastlogin= Admin::where(['id'=>Auth::guard('agent')->user()->id])->update(['last_login' => now()]);
                $user = Admin::where(['id'=>Auth::guard('agent')->user()->id])->update(['login_status' => 1]);
                // $ip = Admin::where(['id'=>Auth::guard('agent')->user()->id])->update(['ip_address' => $ipAddress]);
                // $platforms = Admin::where(['id'=>Auth::guard('agent')->user()->id])->update(['agent_info' => $agentInfo]);
                return response()->json(['success' => true, 'redirect' => route('dashboard')]);
            }
            return response()->json(['success' => false, 'message' => 'Please fill valid details']);
        }else{
            return response()->json(['success' => false, 'message' => 'Incorrect Username or Password']);
        }

        
    } catch (ValidationException $e) {
            // Handle validation errors
            return $e->getResponse();
        } catch (\Throwable $th) {
            // return $th->getMessage();
            return response()->json(['success' => false, 'message' => 'An error occurred during login']);
        }
    }
    public function logout() {
        if (Auth::guard('agent')->check()) {
            // Update login_status
            Admin::where('id', Auth::guard('agent')->user()->id)->update(['login_status' => 2]);
            $user = Admin::where(['id'=>Auth::guard('agent')->user()->id])->update(['logout_at' => now()]);
            // Logout the user
            Auth::guard('agent')->logout();
        }
        // Redirect to the admin login page
        return redirect()->route('admin_login');
    }

    public function super_master(Request $request){

        $admin_ids = QueryHelper::adminids();

    if ($request->has('id')) {
        $admin = Admin::find($request->id);

        if ($admin) {
            $data = Admin::where('admin_id', $admin->id)->paginate(30); // Adjust the pagination limit as needed
        }
    } else {
        $user = Auth::guard('agent')->user();

        if ($user) {
            $data = Admin::whereIn('id', $admin_ids)->paginate(30); // Adjust the pagination limit as needed
        }
    }

    return view('agent.super-master-listing', compact('data'));
}

    public function super_master_search(Request $request){
        // return 5;
        if(Auth::guard('agent')->user()->user_access==1){
            $userRoleId =  Auth::guard('agent')->user()->role_id + 1;
            $adminRoleId =  Auth::guard('agent')->user()->role_id;
            $adminId =  Auth::guard('agent')->user()->admin_id;
    
            $data = Admin::where('role_id', $userRoleId)
                ->where('admin_role', $adminRoleId)
                ->where('admin_id', $adminId);

        }else{
        $userRoleId =  Auth::guard('agent')->user()->role_id + 1;
        $adminRoleId =  Auth::guard('agent')->user()->role_id;
        $adminId =  Auth::guard('agent')->user()->id;

        $data = Admin::where('role_id', $userRoleId)
            ->where('admin_role', $adminRoleId)
            ->where('admin_id', $adminId);
        }
        if ($request->selected_status != '') {
            $searchvalue = $request->selected_status;
           // DB::getQueryLog();
            $data = $data->where('admins.status', 'like', '%' . $searchvalue . '%');
            //DB::getQueryLog();
            // return $data;
        }
        
        if ($request->agency_member_name != '') {
            $searchvalue = $request->agency_member_name;
            $data = $data->where('admins.first_name', 'like', '%' . $searchvalue . '%');
        }
        
        if ($request->login_name != '') {
            $searchvalue = $request->login_name;
            $data = $data->where('admins.username', 'like', '%' . $searchvalue . '%');
        }
        $data=$data->paginate();
        return view('agent.super-master-listing-search',compact('data'));
    }
 

   

   
   
  
   


    public function new_agent(){
        return view('agent.createagent');
    }
    public function casino(){
        return view('agent.casino-report');
    }
    public function user_transfer(){
        return view('agent.user-transfer-statement');
    }
  

 
    public function user_listing(Request $request){
        $userRoleId = Auth::guard('agent')->user()->role_id;
        if (Auth::guard('agent')->user()->user_access == 1) {
            $userId = Auth::guard('agent')->user()->admin_id;
            $mainid = Auth::guard('agent')->user()->id;
            $query = Admin::where('role_id', $userRoleId)
                    ->where('id', '!=' , $mainid)
                    ->where('admin_id', $userId);
        } else {
            $userId = Auth::guard('agent')->user()->id;
            $query = Admin::where('role_id', $userRoleId)
            ->where('id', '!=' , $userId)
            ->where('admin_id', $userId);
           
        }
        // Exclude main super admin with ID 1
        $query->where('id', '!=', 1);
        
        // Exclude current user ID
        // $query->where('id', '!=', $mainid);
        
        // If user_access is not 1, also exclude it from the query
        // if (Auth::guard('agent')->user()->user_access != 1) {
        //     $query->where('id', '!=', $userId);
        // }
      
        // Get the result
        $UserData = $query->paginate(15);
        return view('agent.user-listing',compact('UserData'));
    }
    public function create_account(){
        $userRoleId = Auth::guard('agent')->user()->role_id;
        if (Auth::guard('agent')->user()->user_access == 1) {
            $userId = Auth::guard('agent')->user()->admin_id;
            $mainid = Auth::guard('agent')->user()->id;
            $query = Admin::where('role_id', $userRoleId)
                    ->where('id', '!=' , $mainid)
                    ->where('admin_id', $userId);
        } else {
            $userId = Auth::guard('agent')->user()->id;
            $query = Admin::where('role_id', $userRoleId)
            ->where('id', '!=' , $userId)
            ->where('admin_id', $userId);
           
        }
        // Exclude main super admin with ID 1
        $query->where('id', '!=', 3);
        $data = $query->get();

        return view('agent.create-account',compact('data'));
    }

    public function banner_update(){
        return view('agent.banner-update');
    }  
  
   
    public function market_rollback(){
        return view('agent.market-rollback');
    }
    public function online_user(Request $request){
        $data=DB::table('admins')->where('login_status', '1');
        // dd(DB::getQueryLog());
                if($request->search!=''){
                    // DB::enableQueryLog();
                    $data=$data->where('username','like','%'.$request->search.'%');
                    // $data=$data->where('login_id','like','%'.$request->search.'%');
                    // dd(DB::getQueryLog());
                $data=$data->get();
                }
                
            if($request->search!=''){
            return view('agent.online-user-search',compact('data'));
        }
    
        if(Auth::guard('agent')->user()->user_access=='1'){
            $mainid=Auth::guard('agent')->user()->id;
            $userId=Auth::guard('agent')->user()->admin_id;
            $data=DB::table('admins')->where('login_status', '1')
            ->where('id' ,'!=',$mainid )
            ->where('id' ,'!=',$userId )
            ->paginate(30);
        }else{
            $mainid=Auth::guard('agent')->user()->id;
            $data=DB::table('admins')->where('login_status', '1')
            ->where('id' ,'!=',$mainid )
            ->paginate(30);
        }
       
        return view('agent.online-user' , compact('data'));
    }
    public function delete_bet_history(Request $request){
        $data = DB::table('bet_histories')
        ->select('bet_histories.*', 'clients.username as client_username', 'deleted_by.username as deleted_by_username')
        ->leftJoin('admins as clients', 'bet_histories.client_id', '=', 'clients.id')
        ->leftJoin('admins as deleted_by', 'bet_histories.deleted_by', '=', 'deleted_by.id')
        ->whereNotNull('bet_histories.deleted_at')
        ->get();
        // dd($data);
        return view('agent.delete-bet-history', compact('data'));
    }
 
    public function fancy_setting(){
        return view('agent.fancy-setting');
    }
    public function match_setting(){
        return view('agent.match-setting');
    }
    public function match_limit(){
        return view('agent.match-limit');
    }
    public function suspend_market(){
        return view('agent.suspend-all-market');
    }
    public function score_tv(){
        return view('agent.score-card-and-tv');
    }
    public function profitloss_downline(){
        return view('agent.profitLoss-report-by-downline');
    }
    public function prifitloss_market(){
        return view('agent.profitLoss-report-by-market');
    }
    public function risk_management(){
        return view('agent.risk-management');
    }
   
    public function password_history(){
        return view('agent.password-history');
    }
    public function commission(){
        return view('agent.commission');
    }
    public function market_analysis(){
        return view('agent.bet-market-analysis');
    }
    public function void_market(){
        return view('agent.void-markets');
    }
    public function white_label(Request $request){
        $admin_ids = QueryHelper::adminids();
                $user = Auth::guard('agent')->user();

                if ($user) {
                    $data = Admin::whereIn('id', $admin_ids)->paginate(15); // Adjust the pagination limit as needed
                }
    return view('agent.white-lable', compact('data'));
    }
    public function new_super(){
        return view('agent.super-createagent');
    }
    
    public function transfer_statement(){
        return view('agent.transfer-statement');
    }
    public function casino_result(){
        return view('agent.casino-result');
    }
    public function game_report(){
        return view('agent.game-report');
    }
    public function client_account_statement(){
        return view('agent.clients-account-statement');
    }
   
    public function live_casino(){
        return view('agent.live-casino');
    }
    public function message_report(){
        return view('agent.message-report');
    }
    public function notifi_cation(){
        return view('agent.notification');
    }
  
    public function demo_2(){
        return view('agent.smdemo1-agent-listing-demoag5');
    }
       public function demo_4($id){
         if(Auth::guard('agent')->user()->role_id==3){
              $data1=Admin::orderBy('id','desc');
         $data1=$data1->where('admin_id',$id);
          $admin_ids = $data1->pluck('id')->toArray();
           $data = Admin::whereIn('id', $admin_ids)->get() ?? [];
           
           $user_data = Admin::where('id',$id)->first();
         }
         
        return view('agent.agent-listing-demoag5',get_defined_vars());
    }
    public function demo_1(){
        return view('agent.agent-listing2');
    }
    public function new_user(){
        return view('agent.create-new-user');
    }
    public function race20(){
        return view('agent.race20');
    }
    public function depositRequest(){
        // $all = DepositRequest::all();
        $all = DepositRequest::select('deposit_requests.*','admins.username')->join('admins', 'admins.id', '=', 'deposit_requests.user_id')->where('close',0)->orderBy('deposit_requests.id', 'desc')->get();
       
        return view('agent.depositview')->with('data',$all);
    }
     public function agent_withdraw_request(){
        $all = WithdrawRequest::select('withdraw_requests.*','admins.username')->join('admins', 'admins.id', '=', 'withdraw_requests.client_id')->where('close',0)->orderBy('withdraw_requests.id', 'desc')->get();
        return view('agent.witdrawview')->with('data',$all);
    }
    public function paytmaccountView(){
        return view('agent.paytmaccountview')->with('accounts',PaymentMethod::all());
    }

    public function paytmaccount(Request $request){
        $paymentMethod = PaymentMethod::find($request->id);

        if (!$paymentMethod) {
            // Handle case where payment method with ID 1 is not found
            return redirect()->back()->with('error', 'Payment method not found.');
        }
    
        $paymentMethod->update([
            'b_name' => $request->b_name,
            'title' => $request->account_title,
            'number' => $request->account_number,
            'branch' => $request->branch,
            'ifsc' => $request->ifsc
        ]);
    
        return redirect()->back()->with('success', 'Payment method updated successfully.');
    }
     public function superAdminApproveDeposit($id){
        $withdraw = DepositRequest::find($id);
       
        if ($withdraw) {
            $withdraw->update(['approve' => 1]);
            return redirect()->back()->with('success','Approved Successfully!');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
           
    }
    
    public function masterAdminApproveDeposit($id){
        $deposit = DepositRequest::find($id);
        if($deposit){
            $cb = 0;
            $mb = 0;
            $master = Admin::where('id',Auth::guard('agent')->user()->id)->first();
            if(!$master){
                return redirect()->back()->with('error','Master Balance is 0 Try again Later!');
            }
            if($master->balance>=$deposit->price){
                $mb = $master->balance;
                $client = Admin::where('id',$deposit->user_id)->first();
                // $client = Balance::where('admin_id',$deposit->user_id)->first();
                if($client){
                    $cb = $client->balance;
                    $client->update(['balance'=>$client->balance + $deposit->price]);
                }
                $master->update(['balance'=>$master->balance-$deposit->price]);    
            }else{
                return redirect()->back()->with('error','master balance is low try again later');
            }
                
            $deposit->update(['approve'=>2]);
            BalanceLog::create([
                    'balance_amount' => $deposit->price,
                    'balance_given_by' => Auth::guard('agent')->user()->id,
                    'balance_given_to' => $deposit->user_id
                ]);
           return redirect()->back()->with('success','Approved Successfully!');
        }else{
             return redirect()->back()->with('error','something Went Wrong!');
        }
    }
    
    public function removedepositRequest($id){
         $deposit = DepositRequest::find($id);
        
        if($deposit){
            $deposit->update(['close'=>1]);
             return redirect()->back()->with('success','Request Cancel!');
        }
         return redirect()->back()->with('error','something Went Wrong!');
    }
    public function superAdminApproveWithdraw($id){
        $withdraw = WithdrawRequest::find($id);
       
        if ($withdraw) {
            $withdraw->update(['approve' => 1]);
            return redirect()->back()->with('success','Approved Successfully!');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
           
    }
    
    public function masterAdminApproveWithdraw($id)
{
    // Begin a database transaction
    DB::beginTransaction();

    try {
        // Find the withdrawal request by ID
        $withdrawal = WithdrawRequest::find($id);

        // Check if the withdrawal request exists
        if (!$withdrawal) {
            throw new \Exception('Withdrawal request not found.');
        }
    
       
        // Find the master admin
        $master = Admin::where('id', Auth::guard('agent')->user()->id)->first();
 
        // Check if the master admin exists
        if (!$master) {
            throw new \Exception('Master admin not found.');
        }

        // Check if master balance is sufficient
        if ($master->balance < $withdrawal->balance) {
            throw new \Exception('Master balance is insufficient.');
        }

        // Update client's balance
        $client = Admin::find($withdrawal->client_id);
        if($client->balance <= $withdrawal->balance){
            return redirect()->back()->with('success','client balance is low!');
        }
        if (!$client) {
            throw new \Exception('Client not found.');
        }
        $client->balance -= $withdrawal->balance;
       
        $client->save();

        // Update master's balance
        $master->balance += $withdrawal->balance;
        $master->save();

        // Update withdrawal request status
         BalanceLog::create([
                    'balance_amount' => $withdrawal->balance,
                    'balance_given_by' => $withdrawal->client_id,
                    'balance_given_to' => Auth::guard('agent')->user()->id
                ]);
        $withdrawal->approve = 2;
        $withdrawal->save();

        // Commit the transaction
        DB::commit();

        // Redirect with success message
        return redirect()->back()->with('success', 'Withdrawal approved successfully!');
    } catch (\Exception $e) {
        // Rollback the transaction in case of any exception
        DB::rollBack();

        // Redirect back with error message
        return redirect()->back()->with('error', $e->getMessage());
    }
}
    
     public function removewithdrawRequest($id){
         $withdraw = WithdrawRequest::find($id);
        
        if($withdraw){
            $withdraw->update(['close'=>1]);
             return redirect()->back()->with('success','Request Cancel!');
        }
         return redirect()->back()->with('error','something Went Wrong!');
    }
     function new_admin() {
        return view('agent.create-new-admin');
    }
    function new_admin_store(Request $request) {
       
        $validator= Validator::make($request->all(),[
            'username' =>'required|string',
            'password'=>[ 'required',
    
        ],
        'confirm_password'=>'required|string|same:password',
        'status' => 'required|in:0,1',
        
        ], [
            'numeric' => 'The :attribute must be a number.',
            'regex' => 'The :attribute must contain only numeric values.',
        ]);
        
        
        $validator->sometimes('confirm_password', 'different:new_password', function ($input) {
           
            return $input->new_password !== $input->confirm_password;
        });
      
        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('errors', $errors);
        }
      if(Auth::guard('agent')->user()->role_id == 1){
            $admin_id = 1;
        }else{
           $admin_id = Auth::guard('agent')->user()->role_id;
        }
   
    
        $data = [
            'first_name'    => $request->first_name,
            'last_name'    => $request->last_name,
            'username'    => $request->username,
            'password'    => bcrypt($request->password),
            'status'      => $request->status,
            'currency'      => "INR",
            'credit_limit'=> 0,
            'login_id'     => rand(),
            'role_id'     => Auth::guard('agent')->user()->role_id + 1,
            'admin_id'    => Auth::guard('agent')->user()->id,
            'admin_role'  => $admin_id,
            'created_at'  => now(),
        ];
  
        $admin = Admin::create($data);
        return redirect()->route('super-master-listing')->with('success','Successfully Created');
    }
}
