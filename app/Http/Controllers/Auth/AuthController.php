<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd('hii');
        $validated =  $request->validate([
            'name' => 'string|min:3|required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('user.login')->with('success', 'Registration successful! Please login.');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function checkLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'email|required',
            'password' => 'required|',
        ]);

        $email = $validated['email'];
        $password = $validated['password'];

        $user = User::where('email', $email)->first();

        if (!$user) {
            return back()->with('error', "User Not Found");
        }
        if (!Hash::check($password, $user->password)) {
            return back()->with('error', 'Invalid password');
        }
        auth()->login($user);
        return redirect()->route('dashboard')->with('success', 'Login successful!');
    }
}
