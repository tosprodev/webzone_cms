<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:users',
            'ccode' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users',
            'status' => 'required',
            'password' => 'required|min:6|confirmed',
            'user_dp' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($request->hasFile('user_dp')) {
            $image = $request->file('user_dp');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/user_dp', $imageName);
            $validatedData['user_dp'] = $imageName;
        }

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successful! You can now log in.');
    }
}
