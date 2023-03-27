<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        dd($request);
    }
    public function login()
    {
        return view('auth.login');
    }
    public function authLogin(Request $request)
    {
        return "sdns";
    }
}
