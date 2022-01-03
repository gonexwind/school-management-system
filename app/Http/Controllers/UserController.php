<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.users.index', compact('users'));
    }

    public function create()
    {
        return view('pages.users.create');
    }

    public function store(Request $request)
    {
        User::insert([
           'name' => $request->name,
           'email' => $request->email,
           'password' => Hash::make($request->password),
           'created_at' => Carbon::now(),
        ]);
        return redirect()->route('users.index')->with('status', 'success added user');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return Redirect::route('users.index')->with('status', 'success deleted user');
    }
}