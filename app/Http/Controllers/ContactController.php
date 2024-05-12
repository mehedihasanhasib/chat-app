<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function load_contacts(Request $request)
    {
        $user_id = Chat::distinct()->pluck('user_id');
        $users = User::whereIn('id', [1, 2])->get();

        return response()->json([
            "status" => 1,
            "msg" => "hello",
            "users" => $users
        ], 200);
    }
}
