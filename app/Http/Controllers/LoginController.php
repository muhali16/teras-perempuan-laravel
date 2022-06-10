<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('user.login.index', [
            'title' => 'Login',
        ]);
    }

    // store or insert data for login method
    public function storeLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required', 'min:8'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'failed' => 'Email or password doesn\'t match!',
        ]);
    }

    // this method used to logout session
    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
