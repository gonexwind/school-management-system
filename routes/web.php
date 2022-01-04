<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Setup\StudentClassController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/');
});

// User
Route::resource('users', UserController::class)->except('show');

// Profile
Route::prefix('/profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index']);
    Route::get('/edit', [ProfileController::class, 'edit']);
    Route::put('/update', [ProfileController::class, 'update']);
    Route::get('/password', [ProfileController::class, 'password']);
    Route::put('/password', [ProfileController::class, 'updatePassword']);
});

// Setup Management
Route::prefix('/setup')->group(function () {
    Route::resource('student-class', StudentClassController::class)
        ->except('show');
});

