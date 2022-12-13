<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudents()
    {
        $students = Student::get();
        return response()->json(["students" => $students]);
        // return $students;
    }
}
