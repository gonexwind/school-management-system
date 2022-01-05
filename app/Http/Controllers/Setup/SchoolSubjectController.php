<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\SchoolSubject;
use Illuminate\Http\Request;
use Redirect;

class SchoolSubjectController extends Controller
{
    public function index()
    {
        $subjects = SchoolSubject::all();
        return view('pages.setup.school_subject.index', compact('subjects'));
    }

    public function create()
    {
        return view('pages.setup.school_subject.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:fee_categories']);
        SchoolSubject::insert(['name' => $request->name]);
        return Redirect::route('school-subject.index')->with([
            'message' => 'success inserted data',
            'alert-type' => 'success',
        ]);
    }

    public function edit($id)
    {
        $data = SchoolSubject::find($id);
        return view('pages.setup.school_subject.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|unique:fee_categories']);
        $data = SchoolSubject::find($id);
        $data->name = $request->name;
        $data->save();
        return Redirect::route('school-subject.index')->with([
            'message' => 'success updated data',
            'alert-type' => 'success',
        ]);
    }

    public function destroy($id)
    {
        SchoolSubject::find($id)->delete();
        return Redirect::route('school-subject.index')->with([
            'message' => 'success deleted data',
            'alert-type' => 'success',
        ]);
    }
}