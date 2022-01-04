<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\StudentGroup;
use Illuminate\Http\Request;
use Redirect;

class StudentGroupController extends Controller
{
    public function index()
    {
        $students = StudentGroup::all();
        return view('pages.setup.student_group.index', compact('students'));
    }

    public function create()
    {
        return view('pages.setup.student_group.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:student_groups']);
        StudentGroup::insert(['name' => $request->name]);
        return Redirect::route('student-group.index')->with([
            'message' => 'success inserted data',
            'alert-type' => 'success',
        ]);
    }

    public function edit($id)
    {
        $data = StudentGroup::find($id);
        return view('pages.setup.student_group.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|unique:student_groups']);
        $data = StudentGroup::find($id);
        $data->name = $request->name;
        $data->save();
        return Redirect::route('student-group.index')->with([
            'message' => 'success updated data',
            'alert-type' => 'success',
        ]);
    }

    public function destroy($id)
    {
        StudentGroup::find($id)->delete();
        return Redirect::route('student-group.index')->with([
            'message' => 'success deleted data',
            'alert-type' => 'success',
        ]);
    }
}