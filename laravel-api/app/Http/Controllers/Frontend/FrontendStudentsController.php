<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class FrontendStudentsController extends Controller
{
    //
    public function index()
    {
        $students = Student::all();
        return view('dataS.DataStudents', compact('students'));
    }

    public function getSiswa()
    {
        $students = Student::all();
        return view('admin.dataSiswa', compact('students'));
    }
}
