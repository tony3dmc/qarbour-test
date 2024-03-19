<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // This is a mock login method fo the purpose of testing
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($credentials['email'] === 'glados@example.com' && $credentials['password'] === 'password') {
            return redirect()->back()->with('success', 'Login successful!');
        }

        return redirect()->back()->with('error', 'Invalid credentials.');
    }
}