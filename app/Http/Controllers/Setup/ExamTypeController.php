<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\ExamType;
use Illuminate\Http\Request;
use Redirect;

class ExamTypeController extends Controller
{
    public function index()
    {
        $exams = ExamType::all();
        return view('pages.setup.exam_type.index', compact('exams'));
    }

    public function create()
    {
        return view('pages.setup.exam_type.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:exam_types']);
        ExamType::insert(['name' => $request->name]);
        return Redirect::route('exam-type.index')->with([
            'message' => 'success inserted data',
            'alert-type' => 'success',
        ]);
    }

    public function edit($id)
    {
        $data = ExamType::find($id);
        return view('pages.setup.exam_type.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|unique:exam_types']);
        $data = ExamType::find($id);
        $data->name = $request->name;
        $data->save();
        return Redirect::route('exam-type.index')->with([
            'message' => 'success updated data',
            'alert-type' => 'success',
        ]);
    }

    public function destroy($id)
    {
        ExamType::find($id)->delete();
        return Redirect::route('exam-type.index')->with([
            'message' => 'success deleted data',
            'alert-type' => 'success',
        ]);
    }
}