<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function activities()
    {
        return view('activities');
    }
}