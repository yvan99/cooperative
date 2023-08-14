<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffAuthController;
use App\Http\Controllers\AuditorAuthController;
use App\Http\Controllers\OwnerAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('staff')->group(function () {
    Route::get('/login', [StaffAuthController::class, 'showLoginForm'])->name('staff.login');
    Route::post('/login', [StaffAuthController::class, 'login']);
    Route::get('/register', [StaffAuthController::class, 'showRegistrationForm'])->name('staff.register');
    Route::post('/register', [StaffAuthController::class, 'register']);
    Route::post('/logout', [StaffAuthController::class, 'logout'])->name('staff.logout');
});

// Auditor routes
Route::prefix('auditor')->group(function () {
    Route::get('/login', [AuditorAuthController::class, 'showLoginForm'])->name('auditor.login');
    Route::post('/login', [AuditorAuthController::class, 'login']);
    Route::get('/register', [AuditorAuthController::class, 'showRegistrationForm'])->name('auditor.register');
    Route::post('/register', [AuditorAuthController::class, 'register']);
    Route::post('/logout', [AuditorAuthController::class, 'logout'])->name('auditor.logout');
});

// Owner routes
Route::prefix('owner')->group(function () {
    Route::get('/login', [OwnerAuthController::class, 'showLoginForm'])->name('owner.login');
    Route::post('/login', [OwnerAuthController::class, 'login']);
    Route::get('/register', [OwnerAuthController::class, 'showRegistrationForm'])->name('owner.register');
    Route::post('/register', [OwnerAuthController::class, 'register']);
    Route::get('/logout', [OwnerAuthController::class, 'logout'])->name('owner.logout');
});


// Staff dashboard
Route::middleware('auth:staff')->prefix('staff')->group(function () {
    Route::get('/dashboard', function () {
        return view('staff.dashboard');
    })->name('staff.dashboard');
});

// Auditor dashboard
Route::middleware('auth:auditor')->prefix('auditor')->group(function () {
    Route::get('/dashboard', function () {
        return view('auditor.dashboard');
    })->name('auditor.dashboard');
});

// Owner dashboard
Route::middleware('auth:owner')->prefix('owner')->group(function () {
    Route::get('/dashboard', function () {
        return view('owner.dashboard');
    })->name('owner.dashboard');

    Route::get('/cooperatives', [CooperativeController::class, 'index'])->name('cooperatives.index');
    Route::post('/cooperatives', [CooperativeController::class, 'store'])->name('cooperatives.store');
});
