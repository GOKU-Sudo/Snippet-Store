<?php

use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SnippetDashboardController;

Route::get('/', function () {
    return view('welcome');
});


// User Account Routes
Route::group(['prefix' => 'account','middleware'=>'invalid.method'], function () {


    Route::get('authenticate', function () {
        if (auth()->check()) {
            return redirect()->route('account.snippet-dashboard');
        }
        return redirect()->route('account.login');
    });

    // Guest Routes
    // / Guest middleware - only unauthenticated users can access the routes in this group and if the user is authenticated, they will be redirected to the dashboard page
    Route::middleware('guest')->group(function () {
        Route::get('login', [LoginController::class, 'index'])->name('account.login');
        Route::get('register', [LoginController::class, 'register'])->name('account.register');
        Route::post('process-register', [LoginController::class, 'processRegister'])->name('account.processRegister');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
        
    });
    
    // Authenticated Routes
    // Authenticated middleware- only authenticated users can access the routes in this group and if the user is  unauthenticated, they will be redirected to the login page
    Route::middleware('auth')->group(function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');
        Route::get('snippet-dashboard', [SnippetDashboardController::class, 'index'])->name('account.snippet-dashboard');
            
        Route::post('snippets', [SnippetDashboardController::class, 'snippetStore'])->name('snippets.store');
        Route::delete('snippetdelete/{id}', [SnippetDashboardController::class, 'snippetDelete'])->name('snippets.delete');
        Route::put('snippetfavorite/{id}', [SnippetDashboardController::class, 'snippetFavorite'])->name('snippets.favorite');
        Route::put('snippetupdate/{id}', [SnippetDashboardController::class, 'update'])->name('snippets.update');
        Route::get('snippetexport', [SnippetDashboardController::class, 'export'])->name('snippets.export');
        Route::post('snippetscopy/{id}', [SnippetDashboardController::class, 'copy'])->name('snippets.copy');
        
    });
});

// Admin Routes
Route::group(['prefix' => 'admin','middleware'=>'invalid.method'], function () {

    // Define the authenticate route that checks if the user is authenticated and redirects them to the dashboard page
    // if user try to directly access the authenticate route, they will be redirected to the login page
    // because authenticate route handle post request and not get request 
    // Route::get('authenticate', function () {

    //     if (auth('admin')->check()) {
    //         return redirect()->route('admin.dashboard');
    //     }
    //     return redirect()->route('admin.login');
    // });

    // Admin Guest Routes
    // Guest middleware - only authenticated users can access the routes in this group and if the user is authenticated, they will be redirected to the dashboard page
    Route::middleware('admin.guest')->group(function () {
        Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    // Admin Authenticated Routes
    // Authenticated middleware- only authenticated users can access the routes in this group and if the user is not authenticated, they will be redirected to the login page
    Route::middleware('admin.auth')->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    });
});






//=============
//snippet testing



//------about and contact page
Route::get('about', [SnippetDashboardController::class, 'about'])->name('snippet.about');
Route::get('contact', [SnippetDashboardController::class, 'contact'])->name('snippet.contact');

