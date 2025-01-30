<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{ 
    public function register(){
        return view("auth.register");
    }
    public function submitRegister(Request $request){
        $user = User::register($request);

    if ($user) {
        return redirect()->route('login')->with('success', 'Registration successful!');
    } else {
        return redirect()->back()->with('error', 'Registration failed, please try again.');
    }
    }
    public function login(){
        return view("auth.login");
    }
    public function submitlogin(Request $request){
        $request->validate([
            'name_email' => 'required|string', 
            'password' => 'required|string',
        ]);
    
        $credentials = [
            'password' => $request->input('password'),
        ];
    
      
        if (filter_var($request->input('name_email'), FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $request->input('name_email');
        } else {
            $credentials['name'] = $request->input('name_email');
        }
    
        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('dashboard')->with('success', 'Login successful!');
        }
    
        return redirect()->back()->with('error', 'Invalid credentials, please try again.');
    }
}
