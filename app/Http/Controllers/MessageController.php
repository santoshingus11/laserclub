<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\MessageStatus;


class MessageController extends Controller
{

    public function index()
    {
        $messages = [];
        if (Auth::guard('client')->user()) {
            $chat = Chat::where('user_id',Auth::guard('client')->user()->id)->first();
            // If user is logged in, fetch messages by user ID
           if($chat){
                $messages =  Messages::where('chat_id', $chat->id)->get();
            }
        } else {
            $chat = Chat::where('user_id',request()->ip())->first();
            // If user is not logged in, fetch messages by IP address
            if($chat){
                $messages =  Messages::where('chat_id', $chat->id)->get();
            }
            
        }
        // $messages = Messages::all();
        return response()->json($messages);
    }


    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'message' => 'required|string|max:255'
        ]);
        
        // Create a new message instance
        $message = new Messages();
      
        // If user is logged in, store the user ID
        if (Auth::guard('client')->check()) {
            $chat = Chat::where('user_id',Auth::guard('client')->user()->id)->first();
            if($chat){
                $message->chat_id = $chat->id;
            }else{
                $newchat = Chat::create(['user_id'=>Auth::guard('client')->user()->id]);
                $message->chat_id = $newchat->id;
            }
            $message->user_id = Auth::guard('client')->user()->id;
        } else {
            // If user is not logged in, store the IP address
             $chat = Chat::where('user_id',$request->ip_address)->first();
            if($chat){
                $message->chat_id = $chat->id;
            }else{
                $newchat = Chat::create(['user_id'=>$request->ip_address]);
                $message->chat_id = $newchat->id;
            }
            $message->ip_address = $request->ip_address;
        }
        
        $message->body = $request->message;
        $message->save();
        MessageStatus::create([
        'message_id' => $message->id,
        
        'status' => 'unseen',
    ]);
        return response()->json(['message' => 'Message stored successfully'], 200);
    }
    
    
    public function agentIndex(){
        if(!Auth::guard('agent')->user() ){
            return back()->with('success','You are not authorized for this request!');
        }
        
        $new_chats = Messages::where('admin_id','=',NULL)->get();
        if(Auth::guard('agent')->user()->role_id <= 2){
            $old_chats = Messages::where('admin_id','!=',NULL)->get();
        }else{
            $old_chats = Messages::where('admin_id',Auth::guard('agent')->user()->id)->get();
        }
        
        $data = ['newChats'=>$new_chats,'oldChats'=>$old_chats];
        // dd($data);
        return view('agent.chat2')->with('data',$data);
        
        
    }
    
    public function onloadChats(){
        
        $new_chats = Chat::where('admin_id','=',NULL)->orderBy('id','DESC')->get();
        $new = [];
        $old=[];
        if(count($new_chats)>0){
            foreach($new_chats as $key => $chat){
                $messages = Messages::where('chat_id',$chat->id)->count();
                $new[] = ['chat_id'=>$chat->id,'user'=>$key,'count'=>$messages];
            }
        }
        // $old_chats = Chat::where('admin_id',Auth::guard('agent')->user()->id)->get();
        // if(count($old_chats)>0){
        //     foreach($old_chats as $key => $chat){
        //         $messages = Messages::where('chat_id',$chat->id)->count();
        //         $old[] = ['chat_id'=>$chat->id,'user'=>$key,'count'=>$messages];
        //     }
        // }
        $old_chats = Chat::where('chats.admin_id', Auth::guard('agent')->user()->id)
                    ->leftJoin('messages', 'chats.id', '=', 'messages.chat_id')
                    ->select('chats.*', DB::raw('MAX(messages.created_at) as latest_message_time'))
                    ->groupBy('chats.id')
                    ->orderByDesc('latest_message_time')
                    ->get();
        if(count($old_chats)>0){
            foreach($old_chats as $key => $chat){
                $messages = Messages::where('chat_id',$chat->id)->count();
        $old[] = [
            'chat_id' => $chat->id,
            'user' => $key, // Assuming you have a 'user' attribute in your Chat model
            'count' => $messages, // Count of messages is not required as you are fetching the latest message only
            'latest_message_time' => $chat->latest_message_time
        ];
    }
        }            
        
        $data = ['newChats'=>$new,'oldChats'=>$old];
        return response()->json(['data'=>$data]);
        
    }
    
    public function chatMessagesAjax($id){
        $messages = Messages::where('chat_id',$id)->get();
        $messageIds = $messages->pluck('id')->toArray();
        MessageStatus::whereIn('message_id', $messageIds)
             ->update(['status' => 'seen']);
        return response()->json(['messages'=>$messages]);
    }
    
    public function adminStoreAjaxMessage(Request $request){
        $chat = Chat::find($request->chat_id);
        if($chat){
            $chat->update(['admin_id'=>Auth::guard('agent')->user()->id]);
            $old = Messages::where('chat_id',$request->chat_id)->get();
                foreach ($old as $message) {
                        $message->admin_id = Auth::guard('agent')->user()->id;
                        $message->save();
                    }
            Messages::create([
                                'chat_id' => $chat->id,
                                'admin_id' => Auth::guard('agent')->user()->id,
                                'sender_type' => 'admin',
                                'body' => $request->message
                                
                            ]);        
        }
        
        return response()->json(['success'=>'Message Stored']);
    }
    
    
    
    
    
}
