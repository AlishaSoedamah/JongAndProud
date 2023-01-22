<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $loginCredentials = $request->all();
        $email = $loginCredentials['email'];
        $password = $loginCredentials['password'];

        //check if the user exitst
        $user = User::where('email', $email)->first();
        if (!$user) {
            echo "didn't find user";
            exit;
        }

        $checkHash = Hash::check($password, $user->password);

        if (!$checkHash) {
            echo "wrong password";
            exit;
        }

        //login
        Session::put('user', $user);

        //go back to the homepage
        return redirect('/');
    }

    public function logout()
    {

        if (Session::has('user')) {
            Session::remove('user');
        }

        return redirect('/');
    }
}