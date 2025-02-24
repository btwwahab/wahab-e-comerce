<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showUserLoginForm() {
        return view('frontend.auth.login-register');
    }

    public function userLogin(LoginRequest $request) 
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home')->with('success' , 'Login Successfully');
        }

        return back()->withErrors(['email' => 'Invalid Credentials.'])->withInput();
    }

    public function userRegister(RegisterRequest $request) 
    {
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
