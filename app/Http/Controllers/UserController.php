<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        // return User::where('email', $req->email)->first();
        // Altinative to the above
        $user = User::where(['email'=>$req->email])->first();

        if(!$user || !Hash::check($req->password, $user->password)){
          return "Username or Password is not Matched";
        } else {
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
}

