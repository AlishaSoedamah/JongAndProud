<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class NotFoundController extends Controller
{
    public function notFound()
    {
        return view('not-found');
    }
}