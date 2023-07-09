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

		$credentials = [
			$loginType => $request->input('login'),
			'password' => $request->input('password')
		];

		if (Auth::attempt($credentials)) {
			$user = Auth::user();

			if ($user->usertype === 'agent') {
				return redirect('/agent/dashboard')->with('success', 'Login successful.');
			} elseif ($user->usertype === 'admin') {
				return redirect('/admin/dashboard')->with('success', 'Login successful.');
			} else {
				return redirect('/dashboard')->with('success', 'Login successful.');
			}
		} else {
			return redirect()->back()->withErrors(['error' => 'Invalid credentials.'])->withInput($request->only('login'));
		}
	}
	
	public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login')->with('success', 'You have been logged out.');
    }
}