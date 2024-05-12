<?php

namespace App\Http\Controllers;

use App\Events\SendMessageEvent;
use App\Models\Chat;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class ChatController extends Controller
{
    public function send_message(Request $request)
    {
        if (!isset($request->message)) {
            return response()->json([
                'status' => 0
            ]);
        }

        Chat::create([
            'message' => $request->message,
            'user_id' => $request->user_id ?? null
        ]);

        event(new SendMessageEvent($request->message, $request->user_id));

        return response()->json([
            'status' => 1,
            'msg' => $request->message,
            'user_id' => $request->user_id
        ], 200);
    }
}
