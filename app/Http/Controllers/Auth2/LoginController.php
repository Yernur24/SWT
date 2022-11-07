<?php

namespace App\Http\Controllers\Auth2;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('products.index');
    }
    public function create(){
        return view('auth.login');
    }
    public function login(Request $request){
        if(Auth::check()){
            return redirect()->intended('/clubs');
        }
        $validated=$request->validate([
            'email'=>'required|email',
            'password'=>'required|string'
        ]);
        if(Auth::attempt($validated)){
            return redirect()->route('products.index');
        }
        return back()->withErrors('Incorrect email or password');
    }
}
