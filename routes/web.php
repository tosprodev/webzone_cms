<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Global\Profile\ProfileController;

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

Route::get('/', function () {
    return view('login');
});


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
	
	
	
	Route::patch('/notifications/{notification}/read', [AdminDashboardController::class, 'markAsRead'])->name('notifications.markAsRead');
	Route::delete('/notifications/clear-all', [AdminDashboardController::class, 'clearAllNotifications'])->name('notifications.clearAll');
	Route::delete('/notifications/clear-last-five', [AdminDashboardController::class, 'deleteLastFiveNotifications'])->name('notifications.clearLastFive');
    // Add more routes for other admin dashboard pages here
});

Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/', function () {
        return redirect()->route('login');
    });
	Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
	
});

// Redirect all other /admin/* routes to the /admin/dashboard route
//Route::redirect('/admin/{any}', '/admin/dashboard', 301);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
