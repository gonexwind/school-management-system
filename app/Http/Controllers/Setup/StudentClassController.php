<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Redirect;

class StudentClassController extends Controller
{
    public function index()
    {
        $students = StudentClass::all();
        return view('pages.setup.student_class.index', compact('students'));
    }

    public function create()
    {
        return view('pages.setup.student_class.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:student_classes']);
        StudentClass::insert(['name' => $request->name]);
        return Redirect::route('student-class.index')->with([
            'message' => 'success inserted data',
            'alert-type' => 'success',
        ]);
    }

    public function edit($id)
    {
        $class = StudentClass::find($id);
        return view('pages.setup.student_class.edit', compact('class'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|unique:student_classes']);
        $class = StudentClass::find($id);
        $class->name = $request->name;
        $class->save();
        return Redirect::route('student-class.index')->with([
            'message' => 'success updated data',
            'alert-type' => 'success',
        ]);
    }

    public function destroy($id)
    {
        StudentClass::find($id)->delete();
        return Redirect::route('student-class.index')->with([
            'message' => 'success deleted data',
            'alert-type' => 'success',
        ]);
    }
}