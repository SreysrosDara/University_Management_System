<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{ 
    public function register(){
        return view("auth.register");
    }

    public function submitRegister(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.confirmed' => 'The passwords do not match.',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
        if ($user) {
            
            auth()->login($user);

            
            return redirect()->route('dashboard')->with('success', 'Registration successful! Welcome, ' . $user->name . '!');
        } else {
            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }
    }
    public function login(){
        return view("auth.login");
    }
    public function submitLogin(Request $request)
    {
        $credentials = $request->validate([
            'name_email' => 'required|string',
            'password' => 'required|string',
        ], [
            'name_email.required' => 'The username or email field is required.',
            'password.required' => 'The password field is required.',
        ]);

        $field = filter_var($credentials['name_email'], FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

       
        if (Auth::attempt([$field => $credentials['name_email'], 'password' => $credentials['password']], $request->filled('remember'))) {
            $request->session()->regenerate(); 
            
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        }

        return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out

        // Invalidate the session and regenerate the CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the home page or login page with a success message
        return redirect()->route('login');
    }
}
