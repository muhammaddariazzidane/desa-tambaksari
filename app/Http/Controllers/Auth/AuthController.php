<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3'
        ]);
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('login');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function authLogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:3'
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        return back()->with('error', 'Gagal login');
        // dd($data);
    }
}
