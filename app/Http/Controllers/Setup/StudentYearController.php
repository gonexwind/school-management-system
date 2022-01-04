<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\StudentYear;
use Illuminate\Http\Request;
use Redirect;

class StudentYearController extends Controller
{
    public function index()
    {
        $students = StudentYear::all();
        return view('pages.setup.student_year.index', compact('students'));
    }

    public function create()
    {
        return view('pages.setup.student_year.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:student_years']);
        StudentYear::insert(['name' => $request->name]);
        return Redirect::route('student-year.index')->with([
            'message' => 'success inserted data',
            'alert-type' => 'success',
        ]);
    }

    public function edit($id)
    {
        $data = StudentYear::find($id);
        return view('pages.setup.student_year.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|unique:student_years']);
        $data = StudentYear::find($id);
        $data->name = $request->name;
        $data->save();
        return Redirect::route('student-year.index')->with([
            'message' => 'success updated data',
            'alert-type' => 'success',
        ]);
    }

    public function destroy($id)
    {
        StudentYear::find($id)->delete();
        return Redirect::route('student-year.index')->with([
            'message' => 'success deleted data',
            'alert-type' => 'success',
        ]);
    }
}