<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        // Attempt to authenticate using the 'users' table
        // dd(Auth::attempt(['login' => $request->username, 'password' => $request->password]));
        if (Auth::attempt(['login' => $request->username, 'password' => $request->password])) {
             $user = Auth::user();
            $request->session()->regenerate();
            //  dd($user->type);
            // return view('admin.index');
            return redirect()->intended(route('admin.dashboard'));
        }
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->onlyInput('name');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
