<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\StudentShift;
use Illuminate\Http\Request;
use Redirect;

class StudentShiftController extends Controller
{
    public function index()
    {
        $students = StudentShift::all();
        return view('pages.setup.student_shift.index', compact('students'));
    }

    public function create()
    {
        return view('pages.setup.student_shift.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:student_shifts']);
        StudentShift::insert(['name' => $request->name]);
        return Redirect::route('student-shift.index')->with([
            'message' => 'success inserted data',
            'alert-type' => 'success',
        ]);
    }

    public function edit($id)
    {
        $data = StudentShift::find($id);
        return view('pages.setup.student_shift.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|unique:student_shifts']);
        $data = StudentShift::find($id);
        $data->name = $request->name;
        $data->save();
        return Redirect::route('student-shift.index')->with([
            'message' => 'success updated data',
            'alert-type' => 'success',
        ]);
    }

    public function destroy($id)
    {
        StudentShift::find($id)->delete();
        return Redirect::route('student-shift.index')->with([
            'message' => 'success deleted data',
            'alert-type' => 'success',
        ]);
    }
}