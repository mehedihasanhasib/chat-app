<?php

namespace App\Http\Controllers;

use App\Events\SendMessageEvent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function send_message(Request $request)
    {
        event(new SendMessageEvent($request->message, $request->user_id));

        return response()->json([
            'msg' => $request->message,
            'user_id' => $request->user_id
        ], 200);
    }
}
