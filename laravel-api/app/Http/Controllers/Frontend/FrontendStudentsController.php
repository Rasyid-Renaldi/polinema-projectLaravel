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
        return view('admin.dataSiswa', compact('students'));
    }



    public function editSiswa()
    {
        // $students = Student::find($id);        
        // return view('admin.editSiswa')->with([
        //     'students' => $students
        // ]);
        return view('admin.editSiswa');
    }

    public function editID($id)
    {
        $students = Student::find($id);        
        return view('admin.editSiswa')->with([
            'students' => $students
        ]);
        return view('admin.editSiswa');
    }
}
