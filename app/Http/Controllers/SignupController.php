<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signUp()
    {
        return view('sign-up');
    }
}