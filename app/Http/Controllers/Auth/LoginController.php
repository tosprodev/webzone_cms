<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
      
      	$loginType = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
      
        //$credentials = $request->only($loginType, 'password');
      	$credentials = [
            $loginType => $request->input('login'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($credentials)) {
            // Login successful
            return redirect()->intended('/dashboard')->with('success', 'Login successful.');
        } else {
            // Login failed
            return redirect()->back()->withErrors(['error' => 'Invalid credentials.'])->withInput($request->only('login'));
        }
    }
}
