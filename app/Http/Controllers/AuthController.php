<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;


class AuthController extends Controller
{
    
    public function register(Request $request) {

        return User::create([
            'name' => $request->input(key:'name'),
            'email' => $request->input(key:'email'),
            'password'=>hash::make($request->input(key:'password'))]);
}




    public function login(Request $request){

        if (!Auth::attempt($request->only('email', 'password'))) {
            return 'false';
        }
            /** @var \App\Models\User $user **/


        return 'true';
    }
    public function user()
    {
        return Auth::user();
    }

    public function logout()
    {
        $cookie = Cookie::forget('jwt');

        return response([
            'message' => 'Success'
        ])->withCookie($cookie);
    }

           


    

}
