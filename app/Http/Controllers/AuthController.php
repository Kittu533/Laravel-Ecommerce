<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth; // Import fasad Auth

class AuthController extends Controller
{
    public function showLogin(){
        if(Auth::check()){
            return redirect('/dashboard');
        }else{
            return view('login');
        }
    }
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->attempt($credentials)) {
            //Authentication susccesfull
            Session::put('is_admin','is_admin');
            return redirect()->intended('/dashboard');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
    public function logout()
    {
        Session::flush();
        
        return redirect('/');
    }
    
    
}
