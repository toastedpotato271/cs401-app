<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        // 1. Validate the incoming request data
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Attempt to log the user in
        // Auth::attempt() will try to find a user with the given credentials
        // and if found, and password matches, it will log them in and return true.
        // The 'remember' checkbox value is passed to Auth::attempt() to persist the session.
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            // 3. Regenerate the session to prevent session fixation attacks
            $request->session()->regenerate();

            // 4. Redirect the user to their intended destination or a default dashboard
            return redirect()->intended('/dashboard')->with('success', 'You have been logged in!');
        }

        // 5. If authentication fails, throw a validation exception
        // This will redirect back to the form with an error message.
        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token
        $request->session()->regenerateToken();

        // Redirect to the login page or home page with a success message
        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
