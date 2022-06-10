<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    // method for signup page
    public function index(){
        return view('user.signup.index', [
            'title' => 'Signup',
        ]);
    }

    // store or insert data for signup method
    public function storeSignup(Request $request){
        $validate = $request->validate([
            'username' => 'required|max:20|unique:users|min:4',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|confirmed|min:8'
        ]);

        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);

        return redirect('/login')->with('pleaseLogin', 'Please login to continue.');
    }
}
