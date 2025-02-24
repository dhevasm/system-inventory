<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, "rootPage"])->name("root");
Route::get("/login", [AuthController::class, "loginPage"])->name("login");
Route::get("/register", [AuthController::class, "registerPage"])->name("register");
Route::get("/forgot", [AuthController::class, "forgotPage"])->name("forgot");
Route::get("/reset/{token}", [AuthController::class, "resetPasswordPage"])->name("password.reset");
Route::post("/register", [AuthController::class, "register"])->name("register");
Route::post("/login", [AuthController::class, "login"])->name("login");
Route::post("/forgot", [AuthController::class, "sendResetEmail"])->name("forgot");

Route::middleware("auth")->group(function () {
    Route::get("/logout", [AuthController::class, "logout"])->name("logout");
    Route::get("/dashboard", [PageController::class, "dashboardPage"])->name("dashboard");
});

