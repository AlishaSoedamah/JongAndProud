<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;

Route::get('/', [HomeController::class, "index"]);
Route::get('/about', [AboutController::class, "about"]);
Route::get('/activities', [ActivitiesController::class, "activities"]);
Route::get('/gallery', [GalleryController::class, "gallery"]);
Route::get('/contact', [ContactController::class, "contact"]);
Route::get('/login', [LoginController::class, "login"]);
Route::post('/login', [LoginController::class, "postLogin"]);
Route::get('/sign-up', [SignupController::class, "signUp"]);
Route::post('/sign-up', [SignupController::class, "postUser"]);
Route::get('/logout', [LoginController::class, "logout"]);