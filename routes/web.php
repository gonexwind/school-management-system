<?php

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
Route::resource('users', \App\Http\Controllers\UserController::class);

// Profile
Route::prefix('/profile')->group(function () {
    Route::get('/', function () {
        return view('pages.profile.index');
    });
    Route::get('/edit', function () {
        return view('pages.profile.edit');
    });
    Route::put('/update/{id}', function (\Illuminate\Http\Request $request, $id) {
        $user = \App\Models\User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        $status = array(
            'message' => 'success updated user',
            'alert-type' => 'success',
        );
        return redirect('/profile')->with($status);
    });
});

