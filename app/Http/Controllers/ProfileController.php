<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Redirect;

class ProfileController extends Controller
{
    public function index()
    {
        return view('pages.profile.index');
    }

    public function edit()
    {
        return view('pages.profile.edit');
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect('/profile')->with([
            'message' => 'success updated user',
            'alert-type' => 'success',
        ]);
    }

    public function password()
    {
        return view('pages.profile.password');
    }

    public function updatePassword(Request $request)
    {
        $hashPassword = Auth::user()->password;
        if (Hash::check($request->current_password, $hashPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return Redirect::route('login')->with([
                'message' => 'success updated user password',
                'alert-type' => 'success',
            ]);
        }
        return Redirect::back()->with([
            'message' => 'oops error change password',
            'alert-type' => 'error',
        ]);
    }
}