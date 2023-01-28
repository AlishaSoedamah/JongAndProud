<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, "home"]);
Route::get('/about', [AboutController::class, "about"]);
Route::get('/activities', [ActivitiesController::class, "activities"]);
Route::get('/contact', [ContactController::class, "contact"]);
Route::get('/login', [LoginController::class, "login"]);
Route::post('/login', [LoginController::class, "postLogin"]);
Route::get('/sign-up', [SignupController::class, "signUp"]);
Route::get('/logout', [LoginController::class, "logout"]);


//Crud 
Route::post('/sign-up', [SignupController::class, "postUser"]); // create
// Route::get('users', [UserController::class, "users"]); // read
// Route::get('edit', [UserController::class, "edit"]); // update
Route::resource("/index", UserController::class);