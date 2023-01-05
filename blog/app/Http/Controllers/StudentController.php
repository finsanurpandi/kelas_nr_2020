<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $data['students'] = Student::with('lecture')->get();
        // select students.*, lectures.* from students left join lectures on lectures.nidn = students.nidn

        return view('student.index')->with($data);
    }
}
