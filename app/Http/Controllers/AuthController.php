<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;

class AuthController extends Controller
{
    //call login page
    public function login()
    {
      // dd(Hash::make('1234'));
        return view('auth.login');
    }


    //chek authentication
    public function authLogin(Request $request)
    {
        $userCridentials = $request->only('email', 'password');
        if (Auth::attempt($userCridentials)) {

            return redirect('/dashboard');
        }
        return back()->with('error', 'email or Password incorrect');
    }


    //make logout
    public function dashboard()
    {

        return view('auth.dashboard');
    }
    public function logout()
    {
        Auth::logout();
        return redirect(url(''));

    }
}//
