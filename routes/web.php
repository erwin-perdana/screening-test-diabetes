<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComproController;
use App\Http\Controllers\TakeTestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;
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

Route::get('/', [ComproController::class, 'home'])->name('home');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/proces', [AuthController::class, 'registerProces'])->name('register.proces');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/proces', [AuthController::class, 'loginProces'])->name('login.proces');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['as' => 'admin.', 'prefix' => '/admin'], function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/user', [AdminDashboardController::class, 'user'])->name('user');
        Route::get('/response', [AdminDashboardController::class, 'response'])->name('response');
        Route::get('/result', [AdminDashboardController::class, 'result'])->name('result');
    });

    Route::group(['as' => 'user.', 'prefix' => '/user'], function () {
        Route::get('/dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');

        Route::get('/profile', [UserController::class, 'profile'])->name('profile');
        Route::put('/profile/update/identity', [UserController::class, 'profileUpdateIdentity'])->name('profile.update_identity');
        Route::put('/profile/update/credential', [UserController::class, 'profileUpdateCredential'])->name('profile.update_credential');
        
        Route::group(['as' => 'test.', 'prefix' => '/test'], function () {
            Route::get('/start', [TakeTestController::class, 'testStart'])->name('start');
            Route::post('/store', [TakeTestController::class, 'testStore'])->name('store');
            Route::get('/result/{test}', [TakeTestController::class, 'testResult'])->name('result');
            Route::get('/set-reminder', [UserDashboardController::class, 'setReminder'])->name('set_reminder');
            Route::post('/set-reminder/store', [UserDashboardController::class, 'storeReminder'])->name('store_reminder');
        });

        Route::get('/result-risk', [UserDashboardController::class, 'resultRisk'])->name('result_risk');
    });
});
