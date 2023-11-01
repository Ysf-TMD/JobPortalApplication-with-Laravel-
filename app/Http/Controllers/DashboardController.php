<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        // middleware used on all methodes
        $this->middleware("auth");
    }

    public function index(){
        // we are using valide auth on route ... middlware auth to block non loged users to access dashboard
        // or using middlware within constructor  ...
            return view("user.dashboard");


    }
}
