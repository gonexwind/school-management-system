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

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}