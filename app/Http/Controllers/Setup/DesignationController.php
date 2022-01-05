<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Http\Request;
use Redirect;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation::all();
        return view('pages.setup.designation.index', compact('designations'));
    }

    public function create()
    {
        return view('pages.setup.designation.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:designations']);
        Designation::insert(['name' => $request->name]);
        return Redirect::route('designation.index')->with([
            'message' => 'success inserted data',
            'alert-type' => 'success',
        ]);
    }

    public function edit($id)
    {
        $data = Designation::find($id);
        return view('pages.setup.designation.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|unique:designations']);
        $data = Designation::find($id);
        $data->name = $request->name;
        $data->save();
        return Redirect::route('designation.index')->with([
            'message' => 'success updated data',
            'alert-type' => 'success',
        ]);
    }

    public function destroy($id)
    {
        Designation::find($id)->delete();
        return Redirect::route('designation.index')->with([
            'message' => 'success deleted data',
            'alert-type' => 'success',
        ]);
    }
}