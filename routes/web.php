<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Setup\AssignSubjectController;
use App\Http\Controllers\Setup\ExamTypeController;
use App\Http\Controllers\Setup\FeeAmountController;
use App\Http\Controllers\Setup\FeeCategoryController;
use App\Http\Controllers\Setup\SchoolSubjectController;
use App\Http\Controllers\Setup\StudentClassController;
use App\Http\Controllers\Setup\StudentGroupController;
use App\Http\Controllers\Setup\StudentShiftController;
use App\Http\Controllers\Setup\StudentYearController;
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
    Route::resource('student-class', StudentClassController::class)->except('show');
    Route::resource('student-year', StudentYearController::class)->except('show');
    Route::resource('student-group', StudentGroupController::class)->except('show');
    Route::resource('student-shift', StudentShiftController::class)->except('show');
    Route::resource('fee-category', FeeCategoryController::class)->except('show');
    Route::resource('fee-amount', FeeAmountController::class)->except('destroy');
    Route::resource('exam-type', ExamTypeController::class)->except('show');
    Route::resource('school-subject', SchoolSubjectController::class)->except('show');
    Route::resource('assign-subject', AssignSubjectController::class)->except('destroy');
});
