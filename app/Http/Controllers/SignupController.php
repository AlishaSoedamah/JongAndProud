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
            return redirect('/account-made');
        }
        else {
            echo "Wachtwoorden komen niet overeen!";
        }

        // try {

        //     $user = User::create([
        //         "name" => $name,
        //         "email" => $email,
        //         "password" => $encryptedPassword,
        //     ]);
        
        // }
        // catch (Illuminate\Database\QueryException $e){
        //     $errorCode = $e->errorInfo[1];
        //     if($errorCode == 1062){
        //         echo "Email is al gebruikt!";
        //     }
        // }
    }

    public function userMade()
    {
        return view('account-made');
    }


    public function isAuthenticated($credentials) {
        return view('index');
    }

}