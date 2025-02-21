<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showUserLoginForm() {
        return view('frontend.auth.login-register');
    }

    public function userLogin(Request $request) 
    {
        $request->validate([
         'email' => 'required|email',
         'password' => 'required|min:8'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home')->with('success' , 'Login Successfully');
        }

        return back()->withErrors(['email' => 'Invalid Credentials.'])->withInput();
    }

    public function userRegister(Request $request) 
    {
       $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed'
       ]);

       $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
       ]);

       Auth::login($user);

       return redirect()->route('home')->with('succes' , 'Registeration Successfull!');
    }

    public function userLogout() 
    {

        Auth::logout();
        return redirect()->route('home')->with('success' , 'Logged out successfully.');
    }


}
