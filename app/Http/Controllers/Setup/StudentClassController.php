<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\StudentClass;

class StudentClassController extends Controller
{
    public function index()
    {
        $students = StudentClass::all();
        return view('pages.setup.student_class.index', compact('students'));
    }
}