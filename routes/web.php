<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomePageController;
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

// admin
Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
    // auth
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'showLoginForm')->name('login.form');
        Route::post('/login', 'login')->name('login.action');
        Route::get('/password/forgot', 'showLinkRequestForm')->name('password.forgot');
        Route::post('/password/email', 'sendResetPassword')->name('password.email.send');
        Route::get('/new-password', 'showChangePasswordForm')->name('password.reset');
        Route::post('/new-password', 'changePassword')->name('password.update');
    });

    Route::group(['middleware' => ['auth', 'can:admin']], function () {
        // Logout
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/', [AdminController::class, 'index'])->name('index');
    });

    //user
    Route::resource('users', UserController::class);

    Route::group(['controller' => PetController::class, 'prefix' => 'pets', 'as' => 'pets.'], function () {
        Route::get('/', 'index')->name('index');
        Route::post('/change-data', 'changeData')->name('change-data');
    });
});
