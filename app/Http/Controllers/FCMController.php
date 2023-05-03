<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FCMController extends Controller
{
    //
    public function registerToken(Request $req){
        $user = new User();
        $user->device_token = $req->token;
        $user->save();
    }
}
