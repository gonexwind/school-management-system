<?php

namespace App\Http\Controllers\Setup;
use App\Http\Controllers\Controller;
use App\Models\AssignSubject;
use App\Models\SchoolSubject;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Redirect;

class AssignSubjectController extends Controller
{
    public function index()
    {
        $all = AssignSubject::all();
        $assign_subjects = AssignSubject::select('class_id')->groupBy('class_id')->get();
        return view('pages.setup.assign_subject.index', compact('assign_subjects', 'all'));
    }

    public function create()
    {
        $data['subjects'] = SchoolSubject::all();
        $data['classes'] = StudentClass::all();
        return view('pages.setup.assign_subject.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'subject_id' => 'required',
            'full_mark' => 'required',
            'pass_mark' => 'required',
            'subjective_mark' => 'required',
        ]);
        $count = count($request->subject_id);
        if ($count != null) {
            for ($i = 0; $i < $count; $i++) {
                $data = new AssignSubject();
                $data->class_id = $request->class_id;
                $data->subject_id = $request->subject_id[$i];
                $data->full_mark = $request->full_mark[$i];
                $data->pass_mark = $request->pass_mark[$i];
                $data->subjective_mark = $request->subjective_mark[$i];
                $data->save();
            }
        }
        return Redirect::route('assign-subject.index')->with([
            'message' => 'success inserted data',
            'alert-type' => 'success',
        ]);
    }

    public function edit($id)
    {
        $data['assign_subjects'] = AssignSubject::where('class_id', $id)
            ->orderBy('subject_id', 'asc')->get();
        $data['subjects'] = SchoolSubject::all();
        $data['classes'] = StudentClass::all();
        return view('pages.setup.assign_subject.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'class_id' => 'required',
            'subject_id' => 'required',
            'full_mark' => 'required',
            'pass_mark' => 'required',
            'subjective_mark' => 'required',
        ]);

        $count = count($request->subject_id);
        AssignSubject::where('class_id', $id)->delete();
        for ($i = 0; $i < $count; $i++) {
            $data = new AssignSubject();
            $data->class_id = $request->class_id;
            $data->subject_id = $request->subject_id[$i];
            $data->full_mark = $request->full_mark[$i];
            $data->pass_mark = $request->pass_mark[$i];
            $data->subjective_mark = $request->subjective_mark[$i];
            $data->save();
        }
        return Redirect::route('assign-subject.index')->with([
            'message' => 'success updated data',
            'alert-type' => 'success',
        ]);
    }

    public function show($id)
    {
        $data['details'] = AssignSubject::where('class_id', $id)->orderBy('subject_id', 'asc')->get();
        return view('pages.setup.assign_subject.show', $data);
    }
}