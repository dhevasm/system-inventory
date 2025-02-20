<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", [AuthController::class, "loginPage"])->name("login.page");
Route::get("/register", [AuthController::class, "registerPage"])->name("register.page");
