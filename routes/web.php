<?php

use App\Http\Controllers\backend\backendController;
use App\Http\Controllers\frontend\frontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/", [frontendController::class,"index"])->name(name: "index");
Route::get("/user/cv", [backendController::class,"userCv"])->name(name: "userCv");
