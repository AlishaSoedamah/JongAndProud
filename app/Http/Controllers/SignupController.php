<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function signUp()
    {
        return view('sign-up');
    }

    public function postUser(Request $request)
    {
        //data from the forms
        $formData = $request->all();
        $name = $formData['name'];
        $email = $formData['email'];
        $password = $formData['password'];
        $repeatPassword = $formData['repeatPassword'];

        if ($password == $repeatPassword) {
            //password hash
            $encryptedPassword = Hash::make($password);

            //insert data into db
            User::create([
                "name" => $name,
                "email" => $email,
                "password" => $encryptedPassword,
            ]);
            return redirect('/log-in');
        }
        else {
            echo "Wachtwoorden komen niet overeen!";
        }

    }
}