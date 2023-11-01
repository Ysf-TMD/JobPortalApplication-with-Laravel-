<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    const joobSeeker = "seeker";
    const joobPoster ="employer";
    public function createSeeker(){
        return view("user.seeker-register");
    }
    public function createEmployer(){
        return view("user.employer-register");
    }
    public function storeSeeker(RegistrationFormRequest $request){

        User::create([
            "name"=>request("name"),
            "email"=>request("email"),
            "password"=> bcrypt(request("password")),
            "user_type"=>self::joobSeeker,
            'user_trial'=>now()->addWeek(),
        ]);

        return redirect()->route("login")
            ->with("successMessage","Your Account Was Created");

    }
    public function login(){
        return view ("user.login");
    }
    public function postLogin (Request $request){

        $request->validate([
            "email"=>["required"],
            "password"=>["required"]
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            //if user loged in
            return redirect()->intended('dashboard');
        }else {
            return 'wrong email or password' ;
        }

    }
    public function logout(){
        auth()->logout();
        return redirect()->route("login");
    }
    public function storeEmployer(RegistrationFormRequest $request){

        User::create([
            "name"=>request("name"),
            "email"=>request("email"),
            "password"=> bcrypt(request("password")),
            "user_type"=>self::joobPoster,
        ]);
        return redirect()->route("login")
            ->with("successMessage","Your Account Was Created");

    }



}
