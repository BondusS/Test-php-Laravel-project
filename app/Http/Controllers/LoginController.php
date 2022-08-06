<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{
    public function home(){
        return view(view: 'auth.login');
    }
    public function check(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/');
        }
        return back()->with('error', 'Почта или пароль указаны не верно');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
