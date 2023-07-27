<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomePageController::class, 'index'])->name('index');

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Route::middleware('auth')->group(function () {
//    Route::view('about', 'about')->name('about');
//
//    Route::get('users', [UserController::class, 'index'])->name('users.index');
//
//    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
//    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
//});

// admin
Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
    // auth
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'showLoginForm')->name('login.form');
        Route::post('/login', 'login')->name('login.action');
    });

    Route::group(['middleware' => ['auth', 'can:admin']], function () {
        // Logout
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/', [AdminController::class, 'index'])->name('index');
    });

    //user
    Route::resource('users', UserController::class);
});
