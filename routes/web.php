<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotFoundController;

Route::get('/', [MainController::class, "main"]);
Route::get('/about', [AboutController::class, "about"]);
Route::get('/activities', [ActivitiesController::class, "activities"]);
Route::get('/contact', [ContactController::class, "contact"]);
Route::get('/log-in', [LoginController::class, "logIn"]);
Route::post('/sign-up', [SignupController::class, "postUser"]); 
Route::post('/log-in', [LoginController::class, "postLogin"]);
Route::get('/sign-up', [SignupController::class, "signUp"]);
Route::get('/logout', [LoginController::class, "logout"]);
Route::get('/not-found', [NotFoundController::class, "notFound"]);


//Crud 
// Route::resource("/index", UserController::class, ['middleware' => 'littlegatekeeper', function () {
//     return view('index');
// }]);

// Route::resource('/index', [UserController::class, "isAuthenticated", ['middleware' => 'littlegatekeeper']]);

Route::resource("/index", UserController::class);

// Auth::routes([
//     'register' =>  false
// ]);

// Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
