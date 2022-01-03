<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;

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

    public function update(Request $request, $id)
    {
        $user = User::find($id);
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

    public function updatePassword(Request $request, $id)
    {
        $user = User::find(Auth::user()->id);
        $hashPassword = $user->password;
        if (Hash::check($hashPassword, $request->current_password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect('/profile')->with([
                'message' => 'success updated user',
                'alert-type' => 'success',
            ]);
        }
        redirect()->back()->with([
            'message' => 'oops error change password',
            'alert-type' => 'error',
        ]);
    }
}