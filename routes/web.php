<?php

use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\SnippetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'account'], function () {

    // Guest middleware - only authenticated users can access the routes in this group and if the user is authenticated, they will be redirected to the dashboard page
    Route::group(['middleware' => 'guest'], function () {
        Route::get("login", [LoginController::class, 'index'])->name("account.login");
        Route::get("register", [LoginController::class, 'register'])->name("account.register");
        Route::post("process-Register", [LoginController::class, 'processRegister'])->name("account.processRegister");
        Route::post("authenticate", [LoginController::class, 'authenticate'])->name("account.authenticate");
    });

    // Authenticated middleware- only authenticated users can access the routes in this group and if the user is not authenticated, they will be redirected to the login page
    Route::group(['middleware' => 'auth'], function () {

        Route::get("logout", [LoginController::class, 'logout'])->name("account.logout");

        Route::get("dashboard", [DashboardController::class, 'dashboard'])->name("account.dashboard");
    });
});

//--------------------------------------------  
// for admin routes

Route::group(['prefix' => 'admin'], function () {

    // Guest middleware - only authenticated users can access the routes in this group and if the user is authenticated, they will be redirected to the dashboard page
    Route::group(['middleware' => 'admin.guest'], function () {

        Route::get("login", [AdminLoginController::class, "index"])->name("admin.login");
        Route::post("authenticate", [AdminLoginController::class, 'authenticate'])->name("admin.authenticate");
    });

    // Authenticated middleware- only authenticated users can access the routes in this group and if the user is not authenticated, they will be redirected to the login page
    Route::group(['middleware' => 'admin.auth'], function () {

        Route::get("dashboard", [AdminDashboardController::class, "index"])->name("admin.dashboard");

        Route::get("logout", [AdminLoginController::class, 'logout'])->name("admin.logout");
    });
});

//=============
//snippet testing
Route::get("getsnippets", [SnippetController::class, 'index'])->name("getsnippets");
Route::get("homeview", function(){
    return view('homeview');
});



